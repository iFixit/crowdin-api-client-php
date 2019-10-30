<?php

namespace Crowdin\Http;

use InvalidArgumentException;

class ResponseErrorHandlerFactory
{
    /**
     * @param ResponseErrorHandlerInterface|null|mixed $handler
     * @return ResponseErrorHandlerInterface
     */
    public static function make($handler): ResponseErrorHandlerInterface
    {
        if (!$handler) {
            return new ResponseErrorHandler();
        }

        if ($handler instanceof ResponseErrorHandlerInterface) {
            return  $handler;
        }

        throw new InvalidArgumentException('Response error handler not instanceof ResponseErrorHandlerInterface');
    }
}
