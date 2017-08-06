<?php

namespace App\Gateways;

class BaseGateway
{
	/**
	 * get all resource
	 * @return [array] [collection of resource]
	 */
	public function get()
	{
		return $this->repository->getAll();
	}

	/**
	 * create a new resource data
	 * @param  array  $data [resource to store]
	 * @return [array]      [new resource data]
	 */
	public function create($data = [])
	{
		return $this->repository->create($data);
	}

	/**
	 * find resource by it's unique id
	 * @param  [int] $id  [unique identifier]
	 * @return [array]    [resource data]
	 */
	public function findById($id)
	{
		return $this->repository->findById($id);
	}

	/**
	 * update resource by id
	 * @param  [int] $id    [unique identifier]
	 * @param  array  $data [data for updating resource]
	 * @return [array]      [updated resource data]
	 */
	public function updateById($id, $data = [])
	{
		return $this->repository->updateById($id, $data);
	}

	/**
	 * delete resource by id
	 * @param  [id] $id   [unique identifier]
	 * @return [array]    [the deleted resource data]
	 */
	public function deleteById($id)
	{
		return $this->repository->deleteById($id);
	}
}