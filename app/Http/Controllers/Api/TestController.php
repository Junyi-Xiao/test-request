<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
//use Dingo\Api\Http\Request;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * @var Request
     */
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        //$this->request = request();
    }

    public function testRequest(Request $request)
    {
        dd([
            '$this->request === request()'   => $this->request === request(),
            '$this->request === $request'    => $this->request === $request,
            '$this->request->get(\'_from\')' => $this->request->get('_from'),
            '$request === request()'         => $request === request(),
            '$request->get(\'_from\')'       => $request->get('_from'),
        ]);
    }
}
