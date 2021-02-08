<?php

namespace Itcyborg\JWT\Validation;

use Itcyborg\JWT\Exception;
use RuntimeException;

final class ConstraintViolation extends RuntimeException implements Exception
{
}
