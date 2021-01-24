// JavaScript Document

    
    function dosageVolume() {
    
    var strength = document.getElementsByName("strength")[0].value;
    var volume = document.getElementsByName("volume")[0].value;
    var dosage = document.getElementsByName("dosage")[0].value;
    
    var give = (volume/strength) * dosage;
    
    document.getElementsByName("give")[0].value = give + " ml";
    
}