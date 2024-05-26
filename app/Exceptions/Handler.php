<?php

namespace App\Exceptions;

use App\Traits\ApiResponser;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpException;

use Throwable;

class Handler extends ExceptionHandler
{
    use ApiResponser;
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    /*
    public function render($request, Throwable $exception)
    {
        if($exception instanceof HttpException){
            $code=$exception->getStatusCode();
            $message=Response::$statusTexts[$code];
            return $this->errorResponse($message,$code);
        }
        if($exception instanceof ModelNotFoundException){
            $model=strtolower(class_basename($exception->getModel()));
            $error=Response::HTTP_NOT_FOUND;
            return $this->errorResponse("No existe un servicio en {$model} con ese ID",$error);
        }
        if($exception instanceof AuthorizationException){
            $error=Response::HTTP_FORBIDDEN;
            return $this->errorResponse($exception->getMessage(),$error);
        }
        if($exception instanceof AuthenticationException){
            $error=Response::HTTP_UNAUTHORIZED;
            return $this->errorResponse($exception->getMessage(),$error);
        }
        if($exception instanceof AuthenticationException){
            $error=Response::HTTP_UNAUTHORIZED;
            return $this->errorResponse($exception->getMessage(),$error);
        }
        if($exception instanceof ValidationException){
            $errors=$exception->validator->errors()->getMessages();
            $error=Response::HTTP_UNPROCESSABLE_ENTITY;
            return $this->errorResponse($errors,$error);
        }
        if(env('APP_DEBUG',false)){ //para errores desarrollo
            return parent::render($request, $exception);
        }
        return $this->errorResponse('Error inesperado. Intenta mas tarde',Response::HTTP_INTERNAL_SERVER_ERROR);

    }*/

}
