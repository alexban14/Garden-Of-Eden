<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class GeneralJsonException extends Exception
{
    protected $code = 422;
    /**
     * Report the exception to the owner/developer via email,telegram etc
     *
     * @return void
     */
    public function report()
    {}

    /**
     * Render the exception as an HTTP response
     *
     * @param \Illuminate\Http\Request
     */
    public function render($request)
    {
        return new JsonResponse([
            'errors' => [
                'message' => $this->getMessage()
            ]
        ], $this->getCode());
    }
}
