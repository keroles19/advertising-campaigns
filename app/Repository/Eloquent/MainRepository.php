<?php

namespace App\Repository\Eloquent;

use App\Helpers\Traits\ImageProcess;
use App\Repository\Interfaces\MainRepositoryInterface;
use Illuminate\Database\Eloquent\Model as ModelAlias;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class MainRepository  implements MainRepositoryInterface
{

    /**
     * @var ModelAlias
     */
    protected $model;

    /**
     * BaseRepository constructor.
     * @param $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return Collection
     */
    public function get(): Collection
    {
        return $this->model->all();
    }

    /**
     * @param $attributes
     * @return mixed
     */
    public function create($attributes): ModelAlias
    {
        return $this->model->create($attributes);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findOrFail($id): ModelAlias
    {
        return $this->model->findOrFail($id);
    }

    /**
     * @param $id
     * @return bool
     * @throws Exception
     */
    public function delete($id): bool
    {
        $model = $this->findOrFail($id);

        $model->delete();

        return true;
    }

    /**
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function paginate(int $perPage = 30): LengthAwarePaginator
    {
        return $this->model::paginate($perPage);
    }
}
