<?php

namespace Judopay;

use Judopay\Exception\ValidationError;
use Judopay\Model\Inner\PkPayment;
use Judopay\Model\Inner\Wallet;

class DataType
{
    const TYPE_STRING = 'string';
    const TYPE_FLOAT = 'float';
    const TYPE_INTEGER = 'int';
    const TYPE_ARRAY = 'array';
    const TYPE_BOOLEAN = 'boolean';

    public static function coerce($targetDataType, $value)
    {
        switch ($targetDataType) {
            case static::TYPE_FLOAT:
                // Check that the provided value appears numeric
                if (!is_numeric($value)) {
                    throw new ValidationError('Invalid float value');
                }

                return (float)$value;

            case static::TYPE_ARRAY:
                if (!is_array($value)) {
                    $value = array($value);
                }

                return $value;
            case DataType::TYPE_INTEGER:
                return (int) $value;

            case DataType::TYPE_BOOLEAN:
                return (bool) $value;
        }

        return $value;
    }
}
