<?php 
namespace VendorName\Components\Controllers;

/**
 * Auth Controller
 * 
 * Dieser Controller zeigt Applikationsworkflow, welcher
 * angedacht war, um die ServerRequests sowie den ServerResponse
 * zu standardisieren. Das bestehende Problem war, dass man 
 * keine Kontrolle über die gesendeten Headers hatte bzw. man 
 * hat sie nicht kontrolliert. Basierend auf dem Single Responsibility Prinzip
 * habe ich eine ServerRequest Klasse erstellt, die alle
 * relevanten Daten/Headers enthalten hat. So konnte man die Requests genau
 * steuern. Des Weiteren basiert dieser Approach auf dem PHP-Standard 
 * PSR-14.
 * 
 * @version 2.7.0-rc
 * @author Allan Bachmann <info@ajaybachmann.ch>
 */
class AuthController extends AbstractController {

    protected $model;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Login Route
     * 
     * @route('auth/login')
     * @accepted('POST')
     * 
     * @param ServerRequest
     * @return Response
     */
    public function login(ServerRequest $request): Response {

        // Load Model
        $this->model = $this->loadModel("AuthModel");

        // Get Data
        $data = $this->model->authenticateUser($request);

        // Create Body
        $stream = new StreamBuilder::createFromArray($data);

        // Build Response
        $response = new Response();

        $response->withBody($stream);
        $response->withHeader('Content-Type', 'application/json;charset=UTF8');
        $response->withStatus('200', 'OK');

        return $response;
    }
}