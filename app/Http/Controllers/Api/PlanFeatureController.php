<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Feature\FeatureResource;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanFeatureController extends Controller
{
    public function index(Plan $plan)
    {
        return $this->response(FeatureResource::collection($plan->features));
    }

    public function store(Request $request, Plan $plan)
    {
        $validated = $request->validate([
            'feature_id' => 'required|exists:features,id',
            'value' => 'nullable|string',
        ]);

        $plan->features()->syncWithoutDetaching([
            $validated['feature_id'] => ['value' => $validated['value']]
        ]);

        return $this->response(new FeatureResource($plan->features()->find($validated['feature_id'])), 'Feature added to plan successfully');
    }

    public function update(Request $request, Plan $plan, $featureId)
    {
        $validated = $request->validate([
            'value' => 'nullable|string',
        ]);

        $plan->features()->updateExistingPivot($featureId, [
            'value' => $validated['value']
        ]);

        return $this->response(new FeatureResource($plan->features()->find($featureId)), 'Plan feature updated successfully');
    }

    public function destroy(Plan $plan, $featureId)
    {
        $plan->features()->detach($featureId);

        return $this->response([], 'Feature removed from plan successfully');
    }
}
