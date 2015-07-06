<?php

class Icepay_Paymentmethod_Paypal extends Icepay_Basicmode
{
    public $_version       = "1.0.1";
    public $_method        = "PAYPAL";
    public $_readable_name = "PayPal";
    public $_issuer        = array('DEFAULT');
    public $_country       = array('00');
    public $_language      = array('00');
    public $_currency      = array('EUR', 'USD', 'GBP');
    public $_amount        = array('minimum' => 30, 'maximum' => 1000000);
}