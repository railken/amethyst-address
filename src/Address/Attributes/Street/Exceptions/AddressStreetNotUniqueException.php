<?php

namespace Railken\LaraOre\Address\Attributes\Street\Exceptions;

use Railken\LaraOre\Address\Exceptions\AddressAttributeException;

class AddressStreetNotUniqueException extends AddressAttributeException
{

    /**
     * The reason (attribute) for which this exception is thrown
     *
     * @var string
     */
    protected $attribute = 'street';

    /**
     * The code to identify the error
     *
     * @var string
     */
    protected $code = 'ADDRESS_STREET_NOT_UNIQUE';

    /**
     * The message
     *
     * @var string
     */
    protected $message = "The %s is not unique";
}
