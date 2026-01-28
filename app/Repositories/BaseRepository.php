<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;


abstract class BaseRepository implements RepositoryInterface
{
    protected Model $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll(array $filters = []): LengthAwarePaginator
    {
        $query = $this->model->newQuery();

        foreach ($filters['where'] ?? [] as $field => $value) {
            $query->where($field, $value);
        }

        if (!empty($filters['sort_by'])) {
            $query->orderBy(
                $filters['sort_by'] ?? 'id',
                $filters['sort_order'] ?? 'desc'
            );
        }
        $perPage = min($filters['per_page'] ?? 10, 100);
        return $query->paginate($perPage);
    }
    public function getById(int $id): Model
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data): Model
    {
        $model = $this->getById($id);
        $model->update($data);
        return $model;
    }

    public function delete(int $id): bool
    {
        return (bool) $this->getById($id)->delete();
    }
}
