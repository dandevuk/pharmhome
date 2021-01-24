// JavaScript Document

    
// When the user scrolls down 50px from the top of the document, resize the header's font size
//window.onscroll = function() {scrollFunction()};

//function scrollFunction() {
//  if (document.body.scrollTop > 0 || //document.documentElement.scrollTop > 0) {
//    document.getElementByClass('headerLogo').style.width = //"10vw";
//  //} else {
//    document.getElementByClass('headerLogo').style.width = //"20vw";
//  }
//}

$(window).scroll(function() {
    if ($(this).scrollTop() > 250){  
        $('.headerLogo').addClass("shrink");
    }
    else{
        $('.headerLogo').removeClass("shrink");
    }
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 250){  
        $('.rightIconBar').addClass("shrink");
    }
    else{
        $('.rightIconBar').removeClass("shrink");
    }
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 250){  
        $('.headerMenu ul li a button').addClass("shrink");
    }
    else{
        $('.headerMenu ul li a button').removeClass("shrink");
    }
});