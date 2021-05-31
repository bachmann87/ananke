<?php 

namespace Ananke\Components\Http;

/**
 * Representation of HTML Response
 */
class Response {

    public $header = [
        "redirect" => null,
    ];
    
    public $body = [];

    public function __construct()
    {
        // No Constructor Injection
    }

    /**
     * Get the value of body
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set the value of body
     */
    public function setBody($body): void
    {
        $this->body = $body;
    }

    /**
     * Sets Content Type of Response. Must be valid MIME Type;
     */
    public function setContentType($contentType): void {
        header($contentType);
    }


    /**
     * Set the value of header
     */
    public function setHeader($key, $value): self
    {
        $this->header[$key] = $value;
        return $this;
    }
}