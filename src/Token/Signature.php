<?php

namespace Itcyborg\JWT\Token;

use Itcyborg\JWT\Signature as SignatureImpl;
use function class_alias;

class_alias(SignatureImpl::class, Signature::class);
