<?php 

namespace Ananke\Components\Http;

/**
 * Representation of HTML Response
 */
class Response {

    protected $body;

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
    public function setBody($body): self
    {
        $this->body = $body;

        return $this;
    }
}