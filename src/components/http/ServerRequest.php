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
    protected string|null $query;

    public function __construct()
    {
        $this->requestUri = $this->parseRequest($_SERVER['REQUEST_URI']);
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->query = $this->parseQueryString($_SERVER['REQUEST_URI']);
    }

    /**
     * Parse Query String from Server Variable
     */
    private function parseQueryString(string $requestUri): string|null {
        
        // Init
        $query = null;
        
        if(isset(parse_url($requestUri)['query'])) {
            $query = parse_url($requestUri)['query'];
        }

        return $query;
    }

    /**
     * Parse Request from Server Variable
     */
    private function parseRequest(string $request): string {
        $request = parse_url($request)['path'];
        return substr($request, 1, strlen($request));
    }

    /**
     * Get cleaned Request URI
     */
    public function getRequestUri(): string {
        return $this->requestUri;
    }

    /**
     * Set the value of requestUri
     */
    public function setRequestUri($requestUri): void
    {
        $this->requestUri = $requestUri;
    }

    
}

