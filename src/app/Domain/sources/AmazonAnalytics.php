<?php

namespace App\Domain\Sources;

use App\Domain\SourceEntity;
use App\Domain\SourceProviderInterface;

class AmazonAnalytics implements SourceProviderInterface{

	public function fetchData() : SourceEntity {

		return new SourceEntity('Amazon Analytics', 324);
	}
}