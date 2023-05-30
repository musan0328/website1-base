"use strict";
console.log('aaa');

$(function () {
    const hamburger = $(".hamburger");
    const nav = $(".nav-sp-main");

    hamburger.click(function () {
        console.log('aaabbb');

        $(this).find(".hamburger_bar").toggleClass("is_active");
        nav.toggleClass("is_active");
    });
});

