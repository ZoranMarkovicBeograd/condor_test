<?php

namespace App\Domain\Sources;

use App\Domain\SourceEntity;
use App\Domain\SourceProviderInterface;

class PositiveGuys implements SourceProviderInterface{

	public function fetchData() : SourceEntity {

		return new SourceEntity('Positive guys', 5000);
	}
}
