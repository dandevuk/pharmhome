// JavaScript Document

    function calcSumthree() {
        var num1three = document.getElementsByName("num1three")[0].value;
        var num2three = document.getElementsByName("num2three")[0].value;
        var num3three = document.getElementsByName("num3three")[0].value;
        var num4three = document.getElementsByName("num4three")[0].value;
        var num5three = document.getElementsByName("num5three")[0].value;
        var num6three = document.getElementsByName("num6three")[0].value;
        var num7three = document.getElementsByName("num7three")[0].value;
        var num8three = document.getElementsByName("num8three")[0].value;
        var day1three = document.getElementsByName("days1three")[0].value;
        var day2three = document.getElementsByName("days2three")[0].value;
        var day3three = document.getElementsByName("days3three")[0].value;
        var day4three = document.getElementsByName("days4three")[0].value;
        var day5three = document.getElementsByName("days5three")[0].value;
        var day6three = document.getElementsByName("days6three")[0].value;
        var day7three = document.getElementsByName("days7three")[0].value;
        var day8three = document.getElementsByName("days8three")[0].value;
        
        var dividethree = num1three / 5;
        var timesthree = dividethree * day1three;
        
        var dividetwothree = num2three / 5;
        var timestwothree = dividetwothree * day2three;
        
        var dividethreethree = num3three / 5;
        var timesthreethree = dividethreethree * day3three;
        
        var dividefourthree = num4three / 5;
        var timesfourthree = dividefourthree * day4three;
        
        var dividefivethree = num5three / 5;
        var timesfivethree = dividefivethree * day5three;
        
        var dividesixthree = num6three / 5;
        var timessixthree = dividesixthree * day6three;
        
        var divideseventhree = num7three / 5;
        var timesseventhree = divideseventhree * day7three;
        
        var divideeightthree = num8three / 5;
        var timeseightthree = divideeightthree * day8three;
        
        var calculatethree = timesthree + timestwothree + timesthreethree + timesfourthree + timesfivethree + timessixthree + timesseventhree + timeseightthree;
        
        //var packs = calculate / 28;
        
        var packsthree = Math.floor(calculatethree / 28);
        
        var tabletsthree = Math.floor(calculatethree - packsthree * 28);
        
        document.getElementsByName("sumthree")[0].value = calculatethree;
        
        document.getElementsByName("packsthree")[0].value = packsthree;
        
        document.getElementsByName("tabletsthree")[0].value = tabletsthree;
    }