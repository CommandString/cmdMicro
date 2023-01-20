<?php

namespace Routes;

use CommandString\Env\Env;
use HttpSoft\Response\HtmlResponse;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\ServerRequest;

class ErrorHandler {
    public static function handle404(ServerRequest $req): ResponseInterface
    {
        return new HtmlResponse(Env::get()->twig->render("errors/404.html", [
            "uri" => $req->getRequestTarget()
        ]), 404);
    }

    public static function handle500(ServerRequest $req): ResponseInterface
    {
        return new HtmlResponse(Env::get()->twig->render("errors/500.html", [
            "uri" => $req->getRequestTarget()
        ]), 500);
    }
}