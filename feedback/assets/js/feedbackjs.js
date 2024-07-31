document.querySelector('.hamburger-menu').addEventListener('click', function() {
    this.classList.toggle('active');
  });

function checkDate(){
    "use strict";
    var dateValid=true;


    var vdate = document.getElementById('visitDate').value;
    var today = new Date();
    console.log("Users date  = " + vdate);
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();

    if (dd < 10) {
     dd = '0' + dd;
    }  // need this in case day number is one digit like 6
    if (mm < 10) {
     mm = '0' + mm;
    }  // need this is month number is 1 digit like 4

    var td = "" + yyyy + "-" + mm + "-" + dd;
    console.log("System date = " + td);

    if(vdate == ''){
       document.getElementById('errorMessage').innerHTML=
                        "Do NOT leave Date Field Blank";
       document.getElementById("visitDate").style.borderColor="red";
       document.getElementById("errorMessage").style.backgroundColor = 'pink';
       dateValid = false;
       return(dateValid);
    }
    else   {
       document.getElementById('errorMessage').innerHTML="";
       document.getElementById("visitDate").style.border = null;
       document.getElementById("errorMessage").style = null;
       dateValid = true;
       }// end of else path
    
    
    
    if(vdate >= td){
       document.getElementById('errorMessage').innerHTML="  ** Warning:You cannot select today or the days after. **  ";
       document.getElementById("visitDate").style.borderColor="red";
       document.getElementById("errorMessage").style.backgroundColor = 'pink';
       dateValid = false;
       }
    else  {
       document.getElementById('errorMessage').innerHTML="";
       document.getElementById("visitDate").style.border = null;
       document.getElementById("errorMessage").style = null;
       dateValid = true;
       }// end of else path

    console.log("In function to check date - dateValid is --->" + dateValid);
    return (dateValid);
}//end of function validate visitor's date to present date


function validateForm()
{
"use strict";
var isvalid=true;


   if(document.getElementById("name").value == ''){
        document.getElementById("name").style.borderColor="red";
        document.getElementById("name").style.backgroundColor = 'pink';
        isvalid=false;
        }
   else
       {
        document.getElementById("name").style = null;
       }
    console.log("Is name ok? "+isvalid);
    var correctDate = checkDate();
 


    var radioButtonPicked =  checkIfRadioButtonSelected();
    console.log("Radio button picked?   -->" + radioButtonPicked +"<--");

 
    console.log("Was the date previous in the year? "+correctDate);
    return (isvalid && correctDate &&  radioButtonPicked);

}//end of javascript function validateForm




function checkIfRadioButtonSelected(){
    "use strict";
     var isChecked = false;
        var len = document.getElementsByName('level').length;
        var choices = new Array();
        for (var i=0; i<len; i++)
        {
                if (document.getElementsByName('level')[i].checked)
                {
                        choices.push(document.getElementsByName('level')[i].value);
                }
        }//end of for loop

    if (choices.length > 0){
        isChecked = true;
        document.getElementsByTagName('fieldset')[0].style = null;
        document.getElementsByTagName('legend')[0].style= null;
    }
    else{
        document.getElementsByTagName('fieldset')[0].style.borderColor = 'red';
        document.getElementsByTagName('legend')[0].style.color = 'red';
        isChecked = false;
    }



    console.log("Are the radio buttons  working ?  -> " + isChecked);
    // alert("Radio buttons test -->" +isChecked);
    return isChecked;

}//end of function checkIfRadioButtonSelected