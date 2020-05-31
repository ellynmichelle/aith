/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

/*
File Name: week8.js
Date: 05/6/20
Programmer: Ellyn Culmsee
*/

// The line below is to test your link to the .js file. Please comment it out when it works.
//alert("the link to the .js file is correct!");

// The line below is to test your link to the jquery.min.js file. Please comment it out when it works.
//if (window.jQuery) {alert("the link to the jQuery file is correct!"); }

// Enter your jQuery code below this line (put a blank line first).

$(document).ready(function() {
    
    var count = 0;
    var images = ["images/ace1.jpg","images/ace2.jpg","images/ace4.jpg","images/ace5.jpg"];
    var header = $(".homeHeader");

    header.css("background-image","url("+images[count]+")");

    setInterval(function() {
        header.fadeOut(400, function() {
        header.css("background-image","url("+images[count++]+")");
        header.fadeIn(400);
    });

    if(count == images.length) {
        count = 0;
    };

  },5000);
    
});
