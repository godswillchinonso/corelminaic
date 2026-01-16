<?php 
declare(strict_types=1);
namespace App\Core\Response;

class ApiResponse
{

   public function json(array $payload, int $http_response_code):void
   {
        http_response_code($http_response_code);
        echo json_encode($payload);
        exit();

   }
}
