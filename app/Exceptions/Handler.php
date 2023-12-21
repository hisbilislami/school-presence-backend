<?php

declare(strict_types=1);

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Http\Request;
use Illuminate\Routing\Exceptions\InvalidSignatureException;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class Handler extends ExceptionHandler
{
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
        try {
            $this->reportable(
                function (\Throwable $e): void {
                    // report only in development and production environment
                    if (
                        $this->shouldReport($e)
                        && \in_array(app()->environment(), ['development', 'production'], true)
                    ) {
                        Log::info($e);
                    }
                }
            );
        } catch (\Throwable $th) {
            if (config('app.debug')) {
                throw $th;
            }
        }
    }

    public function render($request, Request|\Throwable $exception = null)
    {
        try {
            if ($exception instanceof AuthorizationException) {
                $data = [
                    'error' => 'Insufficient privileges to perform this action',
                    'errors' => [
                        'message' => 'Insufficient privileges to perform this action',
                    ],
                    'statusCode' => 403,
                ];

                return response()->json($data, $data['statusCode']);
            }
            if ($exception instanceof AuthenticationException || $exception instanceof UnauthorizedHttpException) {
                $data = [
                    'error' => 'Unauthorized: Access is denied due to invalid credentials.',
                    'errors' => [
                        'message' => 'Unauthorized: Access is denied due to invalid credentials.',
                    ],
                    'statusCode' => 401,
                ];

                return response()->json($data, $data['statusCode']);
            }
            if ($exception instanceof MethodNotAllowedHttpException) {
                $data = [
                    'error' => 'Method Not Allowed',
                    'errors' => [
                        'message' => 'Method Not Allowed',
                    ],
                    'statusCode' => 405,
                ];

                return response()->json($data, $data['statusCode']);
            }
            if ($exception instanceof InvalidSignatureException) {
                return response('<h3>Link invalid or has been expired</h3>');
            }
            if ($exception instanceof NotFoundHttpException || $exception instanceof HttpException) {
                $data = [
                    'error' => 'The requested resource was not found',
                    'errors' => [
                        'message' => 'The requested resource was not found',
                    ],
                    'statusCode' => 404,
                ];

                return response()->json($data, $data['statusCode']);
            }

            if ($exception instanceof ThrottleRequestsException) {
                $data = [
                    'error' => 'Too many attempts. Try again after some times.',
                    'errors' => [
                        'message' => 'Too many attempts. Try again after some times.',
                    ],
                    'statusCode' => 429,
                ];

                return response()->json($data, $data['statusCode']);
            }

            if (config('app.debug') && $exception instanceof \Throwable) {
                return response($exception->__toString());
            }

            return response('Content not found', 204);
        } catch (\Throwable $th) {
            if (config('app.debug')) {
                throw $th;
            }

            return response('Content not found', 204);
        }
    }
}
