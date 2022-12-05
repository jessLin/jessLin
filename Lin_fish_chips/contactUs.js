 "use strict"
function submitName()
{
   var firstName = document.getElementById("firstname");
   var surName = document.getElementById("surname");
   var fullName = "my name";
//   document.write(fullName);
   if (surName.value.lenth > 1) {
                    
      fullName = surName.toString();
               
   }
//   fullName = firstName.nodeValue + surName.toString;
//   document.getElementById("fullname").innerHTML = fullName;
//    var bx = document.createElement("button");
//    var bt = document.createTextNode("My new TT284 button");
//
//    bx.appendChild(bt);
//
//    document.body.appendChild(bx);    
    document.getElementById("fullname").innerHTML = firstName.nodeValue;
                
 }

function onChange(){
    document.getElementById("fullname").innerHTML = firstName.nodeValue;
}
