<?php
namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepositoryInterface ;
use Illuminate\Database\Eloquent\Model;


abstract class BaseRepository implements BaseRepositoryInterface
{
    public $_model;

    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    public function __construct($model)
    {
        $this->_model = $model;
    }

    public function getAll()
    {
        return $this->_model->all();
    }
    public function getUserById($id)
    {
        return $this->_model->findOrFail($id);
    }
    public function update($id, array $attributes)
    {
        $user = $this->_model->findOrFail($id);
        return $this->_model->update($attributes);
    }
    public function delete($id)
    {
        $user = $this->_model->findOrFail($id);
        $user->delete();
    }

    public function create(array $attributes)
    {
        return $this->_model->create($attributes);
    }

    public function search($attributes)
    {
        return $this->_model->where($attributes)->get();
    }
    public function find($id)
    {

    }
    public function paginate($limit, $field)
    {
        return $this->_model->paginate($limit, $field);
    }
    public function sort()
    {
        return $this->_model->orderBy('id', 'desc')->get();
    }
}
?>

