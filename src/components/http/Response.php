<?php 

namespace Ananke\Components\Http;

/**
 * Representation of HTML Response
 * 
 * @author Allan Bachmann <info@ajaybachmann.ch>
 * @version 1.0.0
 */
class Response {

    public array $header = [
        "redirect" => null,
    ];
    
    public array $body = [];

    /**
     * Constructor
     */
    public function __construct(array $body = [])
    {
        $this->body = $body;
    }

    /**
     * Get the value of body
     */
    public function getBody(): array
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
    public function setHeader($key, $value): void
    {
        $this->header[$key] = $value;
    }
}