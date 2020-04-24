/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 *
 * Module Created By : Rohan Hapani
 */

define(
    [
        'Magento_Checkout/js/view/payment/default'
    ],
    function (Component) {
        'use strict';
  
        return Component.extend({
            defaults: {
                template: 'RH_CustomPayment/payment/custompayment'
            }
        });
    }
); 