<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    protected $dontReport = [];

    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function register(): void
    {
        $this->renderable(function (Throwable $exception, $request) {
            if ($this->isHttpException($exception)) {
                if ($exception->getStatusCode()) {
                    return response()->view('404', ['errorCode' => $exception->getStatusCode()], 404);
                }
            }
        });
    }
}
