define([
    'jquery',
    'Magento_Checkout/js/libs/jquery.mask'
], function($, mask) {
    'use strict';

    $("[name='postcode']").mask('99999-999');
});
