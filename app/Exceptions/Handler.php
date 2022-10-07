<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Throwable;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        // check NotFondHttpException
        $this->renderable(function (NotFoundHttpException $e, $request) {
            return $this->showMessage($request,'route not found');
        });
        // check ModelNotFoundException
        $this->renderable(function (ModelNotFoundException $e, $request) {
            return $this->showMessage($request,'Model not found');
        });
        // check RouteNotFoundException
        $this->renderable(function (RouteNotFoundException $e, $request) {
            return   $this->showMessage($request,'Incorrect route');
        });

        // check if MethodNotAllowedHttpException
        $this->renderable(function (MethodNotAllowedHttpException $e, $request) {
            return $this->showMessage($request,'the  method is not supported for this route');
        });


    }

    function showMessage($request,$message){
        if ($request->is('api/*')) {
            return response()->json([
                'message' => $message
            ], 404);
        }
    }

}
