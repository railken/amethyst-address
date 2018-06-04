<?php

namespace Railken\LaraOre\Address\Attributes\ZipCode\Exceptions;

use Railken\LaraOre\Address\Exceptions\AddressAttributeException;

class AddressZipCodeNotUniqueException extends AddressAttributeException
{

    /**
     * The reason (attribute) for which this exception is thrown
     *
     * @var string
     */
    protected $attribute = 'zip_code';

    /**
     * The code to identify the error
     *
     * @var string
     */
    protected $code = 'ADDRESS_ZIP_CODE_NOT_UNIQUE';

    /**
     * The message
     *
     * @var string
     */
    protected $message = "The %s is not unique";
}
