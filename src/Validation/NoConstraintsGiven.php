<?php

namespace Itcyborg\JWT\Validation;

use Itcyborg\JWT\Exception;
use RuntimeException;

final class NoConstraintsGiven extends RuntimeException implements Exception
{
}
