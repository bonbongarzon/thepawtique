document.addEventListener("DOMContentLoaded", function () {
  var textInput = document.getElementById("otherSpeciesInput");
  var radioInputs = document.getElementsByName("species");
  
  textInput.addEventListener("focus", function() {
    // Deselect other radio inputs
    for (var i = 0; i < radioInputs.length; i++) {
      radioInputs[i].checked = false;
    }
  });
  
  
});


  const input = document.getElementById('myInput');

  input.addEventListener('input', function() {
    if (input.value.length < 6) {
      // Input value is less than 6 characters
      // You can add your own validation logic or display an error message here
    } else {
      // Input value meets the minimum character limit
    }
  });



