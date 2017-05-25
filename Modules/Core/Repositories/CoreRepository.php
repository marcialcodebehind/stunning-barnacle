<?php 
namespace Modules\Core\Repositories;

/**
 * Interface CoreRepository
 * @package Modules\Core\Repositories
 */
interface CoreRepository
{
    /**
     * @param  int    $id
     * @return $model
     */
    public function find($id);

    /**
     * Return a collection of all elements of the resource
     * @return mixed
     */
    public function all();

    /**
     * Create a resource
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Update a resource
     * @param $model
     * @param  array $data
     * @return mixed
     */
    public function update($model, $data);

    /**
     * Destroy a resource
     * @param $model
     * @return mixed
     */
    public function destroy($model);

    /**
     * Return a collection of elements who's ids match
     * @param array $ids
     * @return mixed
     */
    public function findByMany(array $ids);

}
