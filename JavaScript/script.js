// When the user scrolls down 100px from the top of the document, slide down the navbar
// When the user scrolls to the top of the page, slide up the navbar (50px out of the top view)

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("navBar").style.visibility = "visible";
  } else {
    document.getElementById("navBar").style.visibility = "hidden";
  }
}


