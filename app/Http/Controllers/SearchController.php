<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elasticsearch\Client;

class SearchController extends Controller
{
    /**
     * The client search implementation.
     *
     * @var Client
     */
    protected $client;

    /**
     * Create a new controller instance.
     *
     * @param  Client  $client
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @OA\Get(
     *     path="/search",
     *     @OA\Response(response="200", description="Display a listing of projects.")
     * )
     * @return Response
     */
    public function index()
    {
        $params = [
            'index' => 'toto',
            'id'    => '1',
            'body'  => ['testField' => 'abc']
        ];
        
        $docs = $this->client->index($params);
        return $docs;
    }
}
