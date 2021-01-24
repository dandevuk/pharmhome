// JavaScript Document

    
    function calcSum() {
        var num1 = document.getElementsByName("num1")[0].value;
        var num2 = document.getElementsByName("num2")[0].value;
        var num3 = document.getElementsByName("num3")[0].value;
        var num4 = document.getElementsByName("num4")[0].value;
        var num5 = document.getElementsByName("num5")[0].value;
        var num6 = document.getElementsByName("num6")[0].value;
        var num7 = document.getElementsByName("num7")[0].value;
        var num8 = document.getElementsByName("num8")[0].value;
        var day1 = document.getElementsByName("days1")[0].value;
        var day2 = document.getElementsByName("days2")[0].value;
        var day3 = document.getElementsByName("days3")[0].value;
        var day4 = document.getElementsByName("days4")[0].value;
        var day5 = document.getElementsByName("days5")[0].value;
        var day6 = document.getElementsByName("days6")[0].value;
        var day7 = document.getElementsByName("days7")[0].value;
        var day8 = document.getElementsByName("days8")[0].value;
        
        var divide = num1 / 5;
        var times = divide * day1;
        
        var dividetwo = num2 / 5;
        var timestwo = dividetwo * day2;
        
        var dividethree = num3 / 5;
        var timesthree = dividethree * day3;
        
        var dividefour = num4 / 5;
        var timesfour = dividefour * day4;
        
        var dividefive = num5 / 5;
        var timesfive = dividefive * day5;
        
        var dividesix = num6 / 5;
        var timessix = dividesix * day6;
        
        var divideseven = num7 / 5;
        var timesseven = divideseven * day7;
        
        var divideeight = num8 / 5;
        var timeseight = divideeight * day8;
        
        var calculate = times + timestwo + timesthree + timesfour + timesfive + timessix + timesseven + timeseight;
        
        //var packs = calculate / 28;
        
        var packs = Math.floor(calculate / 28);
        
        var tablets = Math.floor(calculate - packs * 28);
        
        document.getElementsByName("sum")[0].value = calculate;
        
        document.getElementsByName("packs")[0].value = packs;
        
        document.getElementsByName("tablets")[0].value = tablets;
    }