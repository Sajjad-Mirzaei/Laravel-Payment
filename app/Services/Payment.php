<?php


namespace App\Services;

use Shetabit\Multipay\Invoice;


class Payment
{
    public function setInvoice(){

        $invoice=new Invoice;
        # set invoice amount
        $invoice->amount(1000);
    }
}
