<?php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class TesteController
{
    //Get simples
     /**
      * @Route("/teste")
     */
    public function teste()
    {
        return new JsonResponse([
            "message" => "Teste"
        ]);
    }

    //Post simples
    /**
     * @Route("/testepost",methods={"POST"})
     */
    public function teste2(Request $request)
    {
        $content = $request->getContent();
        return new JsonResponse([
            "message" => $content
        ]);
    }

    //GET PASSANDO PARAMETROS POSSIVEIS
    /**
     * @Route("/{_locale}", defaults={"_locale"="en"}, requirements={
     *     "_locale"="en|fr|br"
     * }, methods="GET")
     */
    public function homepage($_locale)
    {
        return new JsonResponse([
            "message" => $_locale
        ]);
    }

    //PUT simples
    /**
     * @Route("/api/posts/{id}", methods="PUT")
     */
    public function edit($id)
    {
        // ... edit a post
    }

    //DELETE simples
    /**
     * @Route("/api/posts/{id}", methods="DELETE")
     */
    public function delete($id)
    {
        // ... edit a post
    }
}