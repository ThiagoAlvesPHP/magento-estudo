define([
    'jquery'
], function($) {
    'use strict';

    $(document).on('click', 'form .subscribe', function(e){
        e.preventDefault();

        console.log(this);
    });
});
