<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\BaseInterface;

class BaseRepository implements BaseInterface
{
	/**
	 * criterias collection
	 * @var array
	 */
	protected $criterias = [];

	/**
	 * number of resource on paginate 
	 * @var integer
	 */
	public $perPage = 15;

	/**
	 * get all resource
	 * @return [Collection] [All Resource]
	 */
	public function getAll()
	{
		return $this->model->get();
	}

	/**
	 * create a new resource
	 * @param  array  $data [new data]
	 * @return [array]      [the new resource data]
	 */
	public function create($data = [])
	{
		$model = $this->model->create($data);

		return $model;
	}

	/**
	 * find reosurce by it's unique data
	 * @return [array] [the resource data]
	 */
	public function findById($id)
	{
		return $this->model->findOrFail($id);
	}

	/**
	 * find and update resource data by it's unique indetifier
	 * @param  id     $id [unique identifier]
	 * @param  array  $data [updated data]
	 * @return [array] [the updated resource]
	 */
	public function updateById($id, $data = [])
	{
		$model = $this->findById($id);

		$model->update($data);

		return $model;
	}

	/**
	 * delete resource by its unique data
	 * @param  id     $id [unique identifier]
	 * @return [array] [the deleted resource]
	 */
	public function deleteById($id)
	{
		$model = $this->findById($id);

		$model->delete();

		return $model;
	}

	/**
	 * apply critera
	 * @return [this] [current class]
	 */
	protected function applyCriteria()
	{
		foreach ($criterias as $criteria) {
			$this->model = $criteria->apply($this->model, $this);
		}

		return $this;
	}

	/**
	 * push criteria
	 * @return [this] [current class]
	 */
	public function pushCriteria($criteria)
	{
		if (!is_array($criteria)) {
			$criteria = [$criteria];
		}

		$this->criterias = array_merge($this->criterias, $criteria);

		return $this;
	}

	/**
	 * get resources by criteria
	 * @return [Collection] [resources data by criteria]
	 */
	public function getByCriteria()
	{
		$this->applyCriteria();
		return $this->model->get();
	}

	/**
	 * get the first one by criteria
	 * @return [array] [data]
	 */
	public function firstByCriteria()
	{
		$this->applyCriteria();
		return $this->model->firstOrFail();
	}

	/**
	 * paginate resources by criteria
	 * @return [Collection] [resources data by criteria]
	 */
	public function paginateByCriteria()
	{
		$this->applyCriteria();
		return $this->model->paginate($this->perPage);
	}
}