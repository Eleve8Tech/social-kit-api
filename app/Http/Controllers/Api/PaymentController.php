<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\LogPaymentRequest;
use App\Http\Requests\SearchFilterRequest;
use App\Http\Resources\Payment\PaymentResource;
use App\Models\Payment;
use App\Services\PaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $service;

    public function __construct(PaymentService $service)
    {
        $this->service = $service;
    }

    public function index(SearchFilterRequest $request)
    {
        $data = $this->service->getAll($request->all());
        return $this->response(PaymentResource::collection($data->load(['user', 'subscription'])));
    }

    public function store(LogPaymentRequest $request)
    {
        $data = $this->service->create($request->all());
        return $this->response(new PaymentResource($data), 'Payment recorded successfully', 201);
    }

    public function show(Payment $payment)
    {
        $data = $this->service->getById($payment->id);
        return $this->response(new PaymentResource($data->load(['user', 'subscription'])));
    }

    public function update(Request $request, Payment $payment)
    {
        $validated = $request->validate([
            'status' => 'in:pending,completed,failed,refunded',
            'paid_at' => 'nullable|date',
        ]);

        $data = $this->service->update($payment->id, $validated);
        return $this->response(new PaymentResource($data), 'Payment status updated successfully');
    }

    public function destroy(Payment $payment)
    {
        $this->service->delete($payment->id);
        return $this->response([], 'Payment record deleted successfully');
    }
}
