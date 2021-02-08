<?php
/**
 * This file is part of Itcyborg\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Itcyborg\JWT\Claim;

use Itcyborg\JWT\ValidationData;

/**
 * Basic interface for validatable token claims
 *
 * @deprecated This interface will be removed on v4
 *
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 * @since 2.0.0
 */
interface Validatable
{
    /**
     * Returns if claim is valid according with given data
     *
     * @param ValidationData $data
     *
     * @return boolean
     */
    public function validate(ValidationData $data);
}
