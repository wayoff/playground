<?php

namespace App\Transformers;

abstract class BaseTransformer
{
	public abstract function transform($item);

	public function transformCollection($collection)
	{
		$data = [];

		// instead of using array_map, I used foreach so that 
		// we don't have to force the collection to preserve 
		// the collection and not force to convert to array
		foreach ($collection as $item) { $data[] = $this->transform($item); }

		return $data;
	}

	public function transformPagination($collection)
	{
		$collection->getCollection()->transform(function($item) {
            return $this->transform($item);
        });

        return $collection;
	}
}