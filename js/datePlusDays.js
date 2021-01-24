// JavaScript Document

function datePlusDays() {    

var addDays = document.getElementsByName("addDays")[0].value;
    
var nextWeek = moment().add(addDays, 'days');


document.getElementById("answerDate").innerHTML = nextWeek.format("Do MMM YYYY"); 
   
}



