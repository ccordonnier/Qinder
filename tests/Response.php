<?php

namespace Qinder\Http;

class Response
{
    protected $content = '';
    protected $headers = [];
    protected $statusCode = 200;

    public function __construct(string $content = "", int $statusCode = 200, array $headers = [])
    {
        $this->content = $content;
        $this->headers = $headers;
        $this->statusCode = $statusCode;
    }

    public function getContent()
    {
        return (string) $this->content;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function getHeaders()
    {
        return (array) $this->headers;
    }

    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }

    public function getStatusCode()
    {
        return (int) $this->statusCode;
    }

    public function setStatusCode(int $statusCode)
    {
        $this->statusCode = $statusCode;
    }
}
