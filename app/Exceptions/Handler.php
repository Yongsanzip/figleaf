<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception) {
        /*if($this->isHttpException($exception)==1){
            if ($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException
                or $exception instanceof \Symfony\Component\HttpKernel\Exception\ NotFoundHttpException) {
                $statusCode = 404;
                $title = '404 에러';
                $description = '요청하신 페이지를 찾을수 없습니다.';
                return response(view('errors.error', [
                    'title' => $title,
                    'description' => $description,
                    'exception' => $exception,
                ]), $statusCode);
            } else if($exception instanceof  MethodNotAllowedHttpException){
                $statusCode = 405;
                $title = '405 에러';
                $description = '요청방식이 잘못되었습니다.';
                return response(view('errors.error', [
                    'title' => $title,
                    'description' => $description,
                    'exception' => $exception,
                ]), $statusCode);
            }
        } else {
            if ($exception instanceof Exception){
            $statusCode = 500;
            $title = '500 에러';
            $description = '관리자에게 문의하세요.';
            if ($this->isHttpException($exception)) {
                // Grab the HTTP status code from the Exception
                $status = $exception->getStatusCode();
            }
            var_dump($this->isHttpException($exception));
            return response(view('errors.error', [
                'title' => $title,
                'description' => $description,
                'exception' => $exception,
            ]), $statusCode);
            }
        }*/
        return parent::render($request, $exception);

    }
}
