<?php

namespace App\Controllers;

use App\Domain\SourceProvider;
use App\Domain\Sources\AmazonAnalytics;
use App\Domain\Sources\GoogleAnalytics;
use App\Domain\Sources\PositiveGuys;

class AnalyticsController{
    
    public function getAction()
    {
        $sourceProvider = new SourceProvider();
        $providersCollection = $sourceProvider
            ->addSource(new GoogleAnalytics())
            ->addSource(new PositiveGuys())
            ->addSource(new AmazonAnalytics())
            ->fetch();

        $response = [
            "error" => false,
            "message" => "",
            "data" => [],
        ];

        foreach ($providersCollection as $provider) {
            $response["data"][] = [
                $provider->getTitle() => $provider->getValue(),
            ];
        }

        echo json_encode($response); die;

    }
}
