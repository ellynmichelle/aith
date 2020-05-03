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

// Code for FAQ functionality
$(document).ready(function () {

    $(".fa-caret-up").hide();
    $(".answer").hide();
    $(".fa-caret-down").show();
    
    $(".fa-caret-down").on("click", function () {
       
        $(".answer").slideToggle();
        
        $(".fa-caret-down").hide();
        
        $(".fa-caret-up").show();
        
    });
    
    $(".fa-caret-up").on("click", function () {
       
        $(".answer").slideToggle();
        
        $(".fa-caret-up").hide();
        
        $(".fa-caret-down").show();
        
    });
    
});
