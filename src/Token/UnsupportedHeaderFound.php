<?php

namespace Itcyborg\JWT\Token;

use InvalidArgumentException;
use Itcyborg\JWT\Exception;

final class UnsupportedHeaderFound extends InvalidArgumentException implements Exception
{
    /** @return self */
    public static function encryption()
    {
        return new self('Encryption is not supported yet');
    }
}
