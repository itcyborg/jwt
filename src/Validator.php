<?php

namespace Itcyborg\JWT;

use Itcyborg\JWT\Validation\Constraint;
use Itcyborg\JWT\Validation\NoConstraintsGiven;
use Itcyborg\JWT\Validation\RequiredConstraintsViolated;

interface Validator
{
    /**
     * @throws RequiredConstraintsViolated
     * @throws NoConstraintsGiven
     */
    public function assert(Token $token, Constraint ...$constraints);

    /**
     * @return bool
     *
     * @throws NoConstraintsGiven
     */
    public function validate(Token $token, Constraint ...$constraints);
}
