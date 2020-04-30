/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

/*
File Name: hamburger.js
Date: 04/30/20
Programmer: Ellyn Culmsee
*/

// The line below is to test your link to the .js file. Please comment it out when it works.
//alert("the link to the .js file is correct!");

// The line below is to test your link to the jquery.min.js file. Please comment it out when it works.
//if (window.jQuery) {alert("the link to the jQuery file is correct!"); }

// Enter your jQuery code below this line (put a blank line first).

// Code for hamburger navigation.
$(document).ready(function () {

    alert("JavaScript working!");

    $(".navigation").hide();
    $(".fa-times").hide();
    $(".fa-bars").show();
    $(".gradientBar").show();
    
    $(".fa-bars").on("click", function () {
       
        $(".navigation").fadeIn();
        
        $(".fa-bars").fadeOut();
        
        $(".fa-times").fadeIn();
        
        $(".gradientBar").hide();
        
    });
    
    $(".fa-times").on("click", function () {
        
        $(".navigation").fadeOut();
        
        $(".fa-times").fadeOut();
        
        $(".fa-bars").fadeIn();
        
        $(".gradientBar").show();
        
    });
    
    $("li").on("click", function () {
        
        $(".navigation").fadeOut();
        
        $(".gradientBar").show();
        
    });
    
});

//Code for current link.
$(document).ready(function() {
    $("[href]").each(function() {
        if (this.href == window.location.href) {
            $(this).addClass("currentLink");
        }
    });
});
