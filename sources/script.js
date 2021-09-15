/* Open nav */
function openNav() {
  if (document.getElementById("mobileNav").style.width == "70%") {
    document.getElementById("mobileNav").style.width = "0%";
  } else {
    document.getElementById("mobileNav").style.width = "70%";
  }
}

/*Scroll-down on index.html*/
$(function() {
  $('.arrow-down').click (function() {
    $('html, body').animate({scrollTop: $('div.arrow-down').offset().top }, 'slow');
    return false;
  });
});

/*Scroll-down at reference-page.html*/
$(function() {
  $('.reference-arrow-down').click (function() {
    $('html, body').animate({scrollTop: "+=500%" }, 'slow');
    return false;
  });
});

/*Close nav at windows resize*/
$( window ).resize(function() {
  // Adding table when window resized to below 500px
  if($(this).width() > 768){
    document.getElementById("mobileNav").style.width = "0%";
  }
});


/*Scroll-right and left functions*/
$(function() {
  $('#right-arrow-1').click(function(event) {
    event.preventDefault();
    $('#container').animate({
      scrollLeft: $('#slide2').offset().left
    }, "fast");
    return false;
  });
});

$(function() {
  $('#right-arrow-2').click(function(event) {
    event.preventDefault();
    $('#container').animate({
      scrollLeft: "+=2000px"
    }, "fast");
    return false;
  });
});

$(function() {
  $('#left-arrow-2').click(function(event) {
    event.preventDefault();
    $('#container').animate({
      scrollLeft: $('#slide1').offset().left
    }, "fast");
  });
});

$(function() {
  $('#reference-left-arrow-2').click(function(event) {
    event.preventDefault();
    $('#container').animate({
      scrollLeft: $('#slide1').offset().left
    }, "fast");
  });
});

$(function() {
  $('#left-arrow-3').click(function(event) {
    event.preventDefault();
    $('#container').animate({
      scrollLeft: $('#slide2').offset()
    }, "fast");
  });
});


/*Slideshow at reference-page.html*/
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("image-slide-image");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.width = "0%";
  }
  x[slideIndex-1].style.width = "100%";
}


/*Function for opening and closing the collapsible in work.html*/
function collapse() {
  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.maxHeight){
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      } 
    });
  }
}