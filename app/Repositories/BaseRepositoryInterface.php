<?php
namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    /**
     * get all
     * @return mixed
     */
    public function getAll();

    /**
     * Get one by id
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * Update data by id
     * @param $id
     * @param $attributes
     * @return mixed
     */
    public function update($id, array $attributes);

    /**
     * Delete data by id
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * Create data
     * @param $attributes
     * @return mixed
     */
    public function create(array $attributes);

    /**
     * Search data by keyword
     * @param $keyword
     * @return mixed
     */
    public function search($keyword);

    /**
     * Paginate data
     * @param $limit
     * @param $page
     * @return mixed
     */
    public function paginate($limit, $page);
}

?>
