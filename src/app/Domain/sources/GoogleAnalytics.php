<?php

namespace App\Domain\Sources;

use App\Domain\SourceEntity;
use App\Domain\SourceProviderInterface;

class GoogleAnalytics implements SourceProviderInterface{

	public function fetchData() : SourceEntity {

		return new SourceEntity('Google Analytics', 200);
	}
}
