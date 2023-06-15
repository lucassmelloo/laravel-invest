<?php

namespace App\Repositories\Eloquent;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements RepositoryInterface
{

    public function __construct(protected Model $model)
    {

    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        $record = $this->model->find($id);
        $record->update($data);

        return $record;
    }

    public function delete($id)
    {
        $record = $this->model->find($id);
        $record->delete();

        return $record;
    }

    public  function  with(String $string) : Builder
    {
        return $this->model->with($string);
    }

    public  function  paginate(Int $pagination)
    {
        return $this->model->paginate($pagination);
    }

}
