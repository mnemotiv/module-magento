<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MisterTango\Payment\Model;



/**
 * Pay In Store payment method model
 */
class MTPayment extends \Magento\Payment\Model\Method\AbstractMethod
{

    /**
     * Payment code
     *
     * @var string
     */
    protected $_code = 'mtpayment';

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;


  

}