<?php

namespace VaultPhp\Commands;

use VaultPhp\Responses\ReadResponse;

class ReadCommand extends AbstractCommand
{
    protected $responseClass = ReadResponse::class;

    /**
     * @param array $parameters
     */
    protected function setRequestParameters(array $parameters)
    {
        list($path) = $parameters;

        $this->uriPath = '/'.ltrim($path, '/');
    }
}
