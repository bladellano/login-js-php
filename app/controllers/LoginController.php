<?php

namespace app\controllers;

use app\database\Connection;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class LoginController
{
    public function store(Request $request, Response $response)
    {
        $body = $request->getParsedBody();

        $email = strip_tags($body['email']);
        $password = strip_tags($body['password']);

        $connection = Connection::getConnection();

        #$prepare = $connection->prepare('select * from users where email = :email and password = :password');
        $prepare = $connection->prepare('select * from users where email = :email');

        $prepare->execute([
            'email' =>$email,
        ]);

        $user = $prepare->fetchObject();

        if (!$user) {
            return http_response_code(401);
        }

        // if(!password_verify($password, $user->password)){
        if ($password !== $user->password) {
            return http_response_code(401);
        }

        http_response_code(200);

        return $response;
    }
}
