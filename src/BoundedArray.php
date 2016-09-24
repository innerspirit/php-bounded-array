<?php

namespace innerspirit\BoundedArray;

class BoundedArray extends \ArrayObject
{
	public $index;

	public function __construct(array $items, $index = 0)
	{
		parent::__construct($items);
		$this->index = $index;
	}

	public function next()
	{
		if($this->index < $this->count() - 1) {
			$this->index++;
		}

		return $this->index;
	}

	public function prev()
	{
		if($this->index > 0) {
			$this->index--;
		}

		return $this->index;
	}

	public function key()
	{
		return $this->index;
	}

}//end class
