var modal = document.getElementById("modal");
var btn = document.getElementById("modal-btn");


btn.onclick = function(){
    
     var x = document.forms["myForm"]["name"].value;
     var y = document.forms["myForm"]["email"].value;
     var z = document.forms["myForm"]["message"].value;
    
      if (x == "" || y == "" || z == "") {
       
        
      }else {
          modal.style.opacity = "1";
          modal.style.visibility = "visible";
      }
   
  
};
