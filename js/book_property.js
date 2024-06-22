const stepMenuOne = document.querySelector('.formbold-step-menu1')
const stepMenuTwo = document.querySelector('.formbold-step-menu2')
const stepMenuThree = document.querySelector('.formbold-step-menu3')

const stepOne = document.querySelector('.formbold-form-step-1')
const stepTwo = document.querySelector('.formbold-form-step-2')
const stepThree = document.querySelector('.formbold-form-step-3')

const formSubmitBtn = document.querySelector('.formbold-btn')
const formBackBtn = document.querySelector('.formbold-back-btn')

const activeText = document.querySelector('.formbold-step-menu-text')

formSubmitBtn.addEventListener("click", function(event){
  event.preventDefault()
  if(stepMenuOne.className == 'formbold-step-menu1 active') {
      event.preventDefault()

      stepMenuOne.classList.remove('active')
      stepMenuTwo.classList.add('active')
      

      stepOne.classList.remove('active')
      stepTwo.classList.add('active')

      formBackBtn.classList.add('active')
      formBackBtn.addEventListener("click", function (event) {
        event.preventDefault()

        stepMenuOne.classList.add('active')
        stepMenuTwo.classList.remove('active')

        stepOne.classList.add('active')
        stepTwo.classList.remove('active')

        formBackBtn.classList.remove('active')

      })

    } else if(stepMenuTwo.className == 'formbold-step-menu2 active') {
      event.preventDefault()

      stepMenuTwo.classList.remove('active')
      stepMenuThree.classList.add('active')

      stepTwo.classList.remove('active')
      stepThree.classList.add('active')

    
      formBackBtn.classList.remove('active')
      formSubmitBtn.textContent = 'PAY TOKEN AMOUNT'
    } else if(stepMenuThree.className == 'formbold-step-menu3 active') {
      document.querySelector('.multiple_step_form').submit()
    }
})


// let currentTab = 0; // Current tab is set to be the first tab (0)
// showTab(currentTab); // Display the current tab

// function showTab(n) {
//   // This function will display the specified tab of the form ...
//   let x = document.getElementsByClassName("Tab");
//   x[n].style.display = "block";
//   // ... and fix the Previous/Next buttons:
//   if (n == 0) {
//     document.getElementById("prevBtn").style.display = "none";
//   } else {
//     document.getElementById("prevBtn").style.display = "inline";
//   }
//   if (n == (x.length - 1)) {
//     document.getElementById("nextBtn").innerHTML = "Submit";
//   } else {
//     document.getElementById("nextBtn").innerHTML = "Next";
//   }
//   // ... and run a function that displays the correct step indicator:
//   fixStepIndicator(n)
// }

// function nextPrev(n) {
//   // This function will figure out which tab to display
//   let x = document.getElementsByClassName("Tab");
//   // Exit the function if any field in the current tab is invalid:
//   if (n == 1 && !validateForm()) return false;
//   // Hide the current tab:
//   x[currentTab].style.display = "none";
//   // Increase or decrease the current tab by 1:
//   currentTab = currentTab + n;
//   // if you have reached the end of the form... :
//   if (currentTab >= x.length) {
//     //...the form gets submitted:
//     document.getElementById("regForm").store();
//     return false;
//   }
//   // Otherwise, display the correct tab:
//   showTab(currentTab);
// }

// function validateForm() {
//   // This function deals with validation of the form fields
//   let x, y, i, valid = true;
//   x = document.getElementsByClassName("Tab");
//   y = x[currentTab].getElementsByTagName("input");
//   // A loop that checks every input field in the current tab:
//   for (i = 0; i < y.length; i++) {
//     // If a field is empty...
//     if (y[i].value == "") {
//       // add an "invalid" class to the field:
//       y[i].className += " invalid";
//       // and set the current valid status to false:
//       valid = false;
//     }
//   }
//   // If the valid status is true, mark the step as finished and valid:
//   if (valid) {
//     document.getElementsByClassName("step")[currentTab].className += " finish";
//   }
//   return valid; // return the valid status
// }

// function fixStepIndicator(n) {
//   // This function removes the "active" class of all steps...
//   let i, x = document.getElementsByClassName("step");
//   for (i = 0; i < x.length; i++) {
//     x[i].className = x[i].className.replace(" active", "");
//   }
//   //... and adds the "active" class to the current step:
//   x[n].className += " active";
// }