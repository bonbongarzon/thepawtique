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


