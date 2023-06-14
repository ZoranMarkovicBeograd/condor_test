<?php

namespace App\Domain;

class SourceEntity {

	public function __construct(private string $title, private int $value) 
	{}

	public function getTitle() : string
	{
		return $this->title;
	}

	public function getValue() : int
	{
		return $this->value;
	}
}
