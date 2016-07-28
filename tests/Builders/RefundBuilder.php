<?php

namespace Tests\Builders;

class RefundBuilder extends AbstractModelBuilder
{
    public function __construct()
    {
        $this->attributeValues = array(
            'receiptId'            => 1234,
            'yourPaymentReference' => '12345',
            'amount'               => 1.01,
        );
    }
}
