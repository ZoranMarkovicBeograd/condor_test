<?php

namespace App\Domain;

use Exception;

class SourceProvider {
	
	private array $sourceProviders = [];


	public function addSource(SourceProviderInterface $source) : self {

		// TODO check if already exists
		// if exists throw exception


        foreach ( $this->sourceProviders as $existingSource) {
            if ($existingSource === $source) {
                throw new Exception('Source already exists.');
            }

        }

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
