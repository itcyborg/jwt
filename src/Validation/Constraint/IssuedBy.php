<?php

namespace Itcyborg\JWT\Validation\Constraint;

use Itcyborg\JWT\Token;
use Itcyborg\JWT\Validation\Constraint;
use Itcyborg\JWT\Validation\ConstraintViolation;

final class IssuedBy implements Constraint
{
    /** @var string[] */
    private $issuers;

    /** @param list<string> $issuers */
    public function __construct(...$issuers)
    {
        $this->issuers = $issuers;
    }

    public function assert(Token $token)
    {
        if (! $token->hasBeenIssuedBy(...$this->issuers)) {
            throw new ConstraintViolation(
                'The token was not issued by the given issuers'
            );
        }
    }
}
