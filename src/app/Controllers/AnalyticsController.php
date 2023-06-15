<?php

namespace App\Controllers;

use App\Domain\SourceProvider;
use App\Domain\Sources\AmazonAnalytics;
use App\Domain\Sources\GoogleAnalytics;
use App\Domain\Sources\PositiveGuys;
use App\Response\Response;

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

        Response::json($response);
    }

    public function storeAction()
    {
            $response = [
                "error" => false,
                "message" => "Data are saved!",
            ];
        // TODO: The logic for saving data.
        Response::json($response);
    }
    
    public function updateAction()
    {
            $response = [
                "error" => false,
                "message" => "Data are updated!",
            ];
        // TODO: The logic for updating data.
        Response::json($response);
    }

    public function destroyAction()
    {
            $response = [
                "error" => false,
                "message" => "Data are deleted!",
            ];
        // TODO: The logic for deleting data.
        Response::json($response);
    }
}
