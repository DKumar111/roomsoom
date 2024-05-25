// Get the container element
var btnContainer = document.getElementById("Header_ullinks__V1SBqAasd");


// Get all buttons with class="btn" inside the container
var btns1 = btnContainer.getElementsByClassName("btn");

// Loop through the buttons and add the active class to the current/clicked button
for (let i = 0; i < btns1.length; i++) {
  
  btns1[i].addEventListener("click", function(e) {
  //  e.preventDefault(e);
    var current = document.getElementsByClassName("nav__active");

    // If there's no active class
    if (current.length > 0) {
  
      current[0].className = current[0].className.replace(" nav__active", "");
    }
    // Add the active class to the current/clicked button
    this.className += " nav__active";
  });
}

