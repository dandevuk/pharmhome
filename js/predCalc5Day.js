// JavaScript Document

    
    function calcSumfive() {
        var num1five = document.getElementsByName("num1five")[0].value;
        var num2five = document.getElementsByName("num2five")[0].value;
        var num3five = document.getElementsByName("num3five")[0].value;
        var num4five = document.getElementsByName("num4five")[0].value;
        var num5five = document.getElementsByName("num5five")[0].value;
        var num6five = document.getElementsByName("num6five")[0].value;
        var num7five = document.getElementsByName("num7five")[0].value;
        var num8five = document.getElementsByName("num8five")[0].value;
        var day1five = document.getElementsByName("days1five")[0].value;
        var day2five = document.getElementsByName("days2five")[0].value;
        var day3five = document.getElementsByName("days3five")[0].value;
        var day4five = document.getElementsByName("days4five")[0].value;
        var day5five = document.getElementsByName("days5five")[0].value;
        var day6five = document.getElementsByName("days6five")[0].value;
        var day7five = document.getElementsByName("days7five")[0].value;
        var day8five = document.getElementsByName("days8five")[0].value;
        
        var dividefive = num1five / 5;
        var timesfive = dividefive * day1five;
        
        var dividetwofive = num2five / 5;
        var timestwofive = dividetwofive * day2five;
        
        var dividethreefive = num3five / 5;
        var timesthreefive = dividethreefive * day3five;
        
        var dividefourfive = num4five / 5;
        var timesfourfive = dividefourfive * day4five;
        
        var dividefivefive = num5five / 5;
        var timesfivefive = dividefivefive * day5five;
        
        var dividesixfive = num6five / 5;
        var timessixfive = dividesixfive * day6five;
        
        var dividesevenfive = num7five / 5;
        var timessevenfive = dividesevenfive * day7five;
        
        var divideeightfive = num8five / 5;
        var timeseightfive = divideeightfive * day8five;
        
        var calculatefive = timesfive + timestwofive + timesthreefive + timesfourfive + timesfivefive + timessixfive + timessevenfive + timeseightfive;
        
        //var packs = calculate / 28;
        
        var packsfive = Math.floor(calculatefive / 28);
        
        var tabletsfive = Math.floor(calculatefive - packsfive * 28);
        
        document.getElementsByName("sumfive")[0].value = calculatefive;
        
        document.getElementsByName("packsfive")[0].value = packsfive;
        
        document.getElementsByName("tabletsfive")[0].value = tabletsfive;
    }