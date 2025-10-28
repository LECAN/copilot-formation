<?php

require_once __DIR__ . '/Response.php';

class WelcomeController
{
    public function index(): Response
    {
        return new Response(
            '<html><body><h1>Welcome</h1></body></html>'
        );
    }
}
