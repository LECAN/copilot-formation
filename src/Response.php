<?php

class Response
{
    private string $content;
    private int $statusCode;

    public function __construct(string $content, int $statusCode = 200)
    {
        $this->content = $content;
        $this->statusCode = $statusCode;
    }

    public function send(): void
    {
        http_response_code($this->statusCode);
        echo $this->content;
    }
}
