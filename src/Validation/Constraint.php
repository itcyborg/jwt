<?php

namespace Itcyborg\JWT\Validation;

use Itcyborg\JWT\Token;

interface Constraint
{
    /** @throws ConstraintViolation */
    public function assert(Token $token);
}
