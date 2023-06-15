<?php

namespace App\Domain;

use Exception;

class SourceProvider {
	
	private array $sourceProviders = [];

	public function addSource(SourceProviderInterface $source) : self {

		// TODO check if already exists
       
		// foreach ( $this->sourceProviders as $existingSource) {
         //   if ($existingSource->getId() === $source->getId()) {
          //      throw new Exception('Source already exists.');
            //}

        //}

        $this->sourceProviders[] = $source;
		return $this;
	}

	public function fetch() {
		$sourceCollection = [];

		foreach ($this->sourceProviders as $source) {
			$sourceCollection[] = $source->fetchData();
		}

		return $sourceCollection;
	}

}
