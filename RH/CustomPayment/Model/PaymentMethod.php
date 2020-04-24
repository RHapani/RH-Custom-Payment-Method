<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 *
 * Module Created By : Rohan Hapani
 */

namespace RH\CustomPayment\Model;

/**
 * RH Custom Payment Method Model
 */
class PaymentMethod extends \Magento\Payment\Model\Method\AbstractMethod {

	/**
	 * Payment Method code
	 *
	 * @var string
	 */
	protected $_code = 'custompayment';
}