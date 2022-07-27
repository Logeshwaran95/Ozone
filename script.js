
    var index = 0;
    Slides();
    
    function Slides() {
      var i;
      var slide = document.getElementsByClassName("slide");
      for (i = 0; i < slide.length; i++) {
        slide[i].style.display = "none";  
      }
      index++;
      if (index > slide.length) {index = 1}    
      slide[index-1].style.display = "block";  
      setTimeout(Slides, 5000); // Change image every 2 seconds
    }
