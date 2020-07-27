define([
    'jquery',
    'mage/translate',
    'jquery/ui',
    'mage/mage'
], function ($) {
    'use strict';
    // return function change(config, element){

        $(".btn-ajax").click(function (config, element) {
            var thisButton = this;
            var seeUrl = config.Url;
            var time = '10';
            $.ajax({
                url: seeUrl,
                type: 'POST',
           success: function () {
               setTimeout(function(){
                    time--;
                   $('#demo-ajax').html(time);
               },1000);
                $(thisButton).html('OK');
                $(thisButton).css('color','white');
                $(thisButton).css('background-color','black');
                $(thisButton).css('hover','gray');
            },
                error: function (e) {
                    console.log(e.message);
                }
            })
        })
    // }
});
