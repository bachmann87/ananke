<?php

namespace Ananke\Components\Http;

/**
 * Server Request
 * 
 * @author Allan Bachmann <info@ajaybachmann.ch>
 * @version 1.0.0
 * 
 */
class ServerRequest {

    protected string $requestUri;
    protected string $method;
    protected string $query;

    public function __construct()
    {
        $this->requestUri = $this->parseRequest($_SERVER['REQUEST_URI']);
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    /**
     * Parse Request from Server Variable
     */
    private function parseRequest(string $request) {
        $request = parse_url($request)['path'];
        return substr($request, 1, strlen($request));
    }

    /**
     * Get cleaned Request URI
     */
    public function getRequestUri() {
        return $this->requestUri;
    }

    /**
     * Set the value of requestUri
     */
    public function setRequestUri($requestUri): self
    {
        $this->requestUri = $requestUri;
        return $this;
    }
}

