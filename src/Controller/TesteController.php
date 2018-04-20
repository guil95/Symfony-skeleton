<?php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


class TesteController
{
     /**
      * @Route("/teste")
     */
    public function teste()
    {
        return new JsonResponse([
            "message" => "Teste"
        ]);
    }
}