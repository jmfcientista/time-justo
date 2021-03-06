<?php
/**
 * Created by IntelliJ IDEA.
 * User: mauricio
 * Date: 29/06/17
 * Time: 11:21
 */

namespace App\Http\Responses;


class HttpResponses
{
    private $cod200 = 200;
    private $cod400 = 400;
    private $cod500 = 500;

    private $message200 = "Requisição realizada com sucesso!";
    private $message400 = "Parâmetros da requisição incorretos.";
    private $message500 = "Erro no servidor";

    public function success()
    {
        $response = [
            'code' => $this->cod200,
            'message' => $this->message200
        ];

        return json_encode($response);
    }

    public function reponseSuccess($answer)
    {
        $response = [
            'code' => $this->cod200,
            'message' => $this->message200,
            'result' => $answer
        ];

        return json_encode($response);
    }

    public function error()
    {
        $response = [
            'code' => $this->cod500,
            'message' => $this->message500,
        ];

        return json_encode($response);
    }

    public function reponseError($answer)
    {
        $response = [
            'code' => $this->cod400,
            'message' => $answer,
        ];

        return json_encode($response);
    }

    public function errorParameters()
    {
        $response = [
            'code' => $this->cod400,
            'message' => $this->message400
        ];

        return json_encode($response);
    }

    public function userNotFound()
    {
        $response = [
            'code' => $this->cod400,
            'message' => 'Usuário Não encontrado.'
        ];

        return json_encode($response);
    }
}