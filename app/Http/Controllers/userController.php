<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public static function getUserInfo($request)
    {
        $response = Http::post('https://apigateway.conectagov.estaleiro.serpro.gov.br/api-cpf-light/v2/consulta/cpf', [
            'x-cpf-usuario' => $request->cpf
        ]);

        return $response;
    }
}
