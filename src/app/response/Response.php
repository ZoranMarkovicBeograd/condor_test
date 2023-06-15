<?php
namespace App\Response;

class Response {

    public static function json(array $data)  {
        echo json_encode($data);
    }
}
