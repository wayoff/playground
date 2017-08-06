<?php

namespace App\Repositories\Contracts;

use App\Repositories\Contracts\BaseInterface as Repository;

interface CriteriaInterface
{
	public function apply($query, Repository $repository);
}