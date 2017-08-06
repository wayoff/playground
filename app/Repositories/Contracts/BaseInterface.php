<?php

namespace App\Repositories\Contracts;

use CriteriaInterface as Criteria;

interface BaseInterface {

	/**
	 * get all resource
	 * @return [Collection] [All Resource]
	 */
	public function getAll();

	/**
	 * create a new resource
	 * @param  array  $data [new data]
	 * @return [array]      [the new resource data]
	 */
	public function create($data = []);

	/**
	 * find reosurce by it's unique data
	 * @return [array] [the resource data]
	 */
	public function findById($id);

	/**
	 * find and update resource data by it's unique indetifier
	 * @param  id     $id [unique identifier]
	 * @param  array  $data [updated data]
	 * @return [array] [the updated resource]
	 */
	public function updateById($id, $data = []);

	/**
	 * delete resource by its unique data
	 * @param  id     $id [unique identifier]
	 * @return [array] [the deleted resource]
	 */
	public function deleteById($id);

	/**
	 * push criteria
	 * @return [this] [return current class]
	 */
	public function pushCriteria(Criteria $criteria);

	/**
	 * get resources by criteria
	 * @return [Collection] [resources data by criteria]
	 */
	public function getByCriteria();

	/**
	 * get the first one by criteria
	 * @return [array] [data]
	 */
	public function firstByCriteria();

	/**
	 * paginate resources by criteria
	 * @return [Collection] [resources data by criteria]
	 */
	public function paginateByCriteria();
}