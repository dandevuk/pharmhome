<?php $pageTitle = "Calculators";?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<main id="top">

	<section class="main-report" id="calculators">
 		<h2>Calculators</h2>
 		<div class="sectionPredCalc">
    
    <p>Change the first number of days if the patient has already started the course.<br>Delete any doses that aren't required if the dose stops higher than 5mg.</p>
    
<div class="predCalc">

<div class="third-width">
    
<div style="width: 100%">
   <h3>7 days</h3>    
</div>
  
<div>
<form>
    <h4>Dose (mg)</h4>
    1: <input type="text" name="num1" value="40"><br>
    2: <input type="text" name="num2" value="35"><br>
    3: <input type="text" name="num3" value="30"><br>
    4: <input type="text" name="num4" value="25"><br>
    5: <input type="text" name="num5" value="20"><br>
    6: <input type="text" name="num6" value="15"><br>
    7: <input type="text" name="num7" value="10"><br>
    8: <input type="text" name="num8" value="5">
</form>
  
  </div>

  <div>
  
<form>
    <h4>Number of days</h4>
    <input type="text" name="days1" value="14"><br>
    <input type="text" name="days2" value="7"><br>
    <input type="text" name="days3" value="7"><br>
    <input type="text" name="days4" value="7"><br>
    <input type="text" name="days5" value="7"><br>
    <input type="text" name="days6" value="7"><br>
    <input type="text" name="days7" value="7"><br>
    <input type="text" name="days8" value="7">
</form>
  </div>

   <div class="calculateDiv"> 
       
    <p><button onclick="calcSum()">Calculate</button></p>
    
    <p>Total amount: <input type="text" name="sum"></p>
    
    <p><input type="text" name="packs"> Packs  <input type="text" name="tablets"> Tablet(s)</p>
       
  </div>
  
  </div>

<div class="predCalcDiv">
    
<div style="width: 100%">
   <h3>5 days</h3>    
</div>
  
<div>
<form>
    <h4>Dose (mg)</h4>
    1: <input type="text" name="num1five" value="40"><br>
    2: <input type="text" name="num2five" value="35"><br>
    3: <input type="text" name="num3five" value="30"><br>
    4: <input type="text" name="num4five" value="25"><br>
    5: <input type="text" name="num5five" value="20"><br>
    6: <input type="text" name="num6five" value="15"><br>
    7: <input type="text" name="num7five" value="10"><br>
    8: <input type="text" name="num8five" value="5">
</form>
  
  </div>

  <div>
  
<form>
    <h4>Number of days</h4>
    <input type="text" name="days1five" value="5"><br>
    <input type="text" name="days2five" value="5"><br>
    <input type="text" name="days3five" value="5"><br>
    <input type="text" name="days4five" value="5"><br>
    <input type="text" name="days5five" value="5"><br>
    <input type="text" name="days6five" value="5"><br>
    <input type="text" name="days7five" value="5"><br>
    <input type="text" name="days8five" value="5">
</form>
  </div>

   <div class="calculateDiv"> 
       
    <p><button onclick="calcSumfive()">Calculate</button></p>
    
    <p>Total amount: <input type="text" name="sumfive"></p>
    
    <p><input type="text" name="packsfive"> Packs  <input type="text" name="tabletsfive"> Tablet(s)</p>
       
  </div>
  
  </div>

<div class="predCalcDiv">
    
<div style="width: 100%">
   <h3>3 days</h3>    
</div>
  
<div>
<form>
    <h4>Dose (mg)</h4>
    1: <input type="text" name="num1three" value="40"><br>
    2: <input type="text" name="num2three" value="35"><br>
    3: <input type="text" name="num3three" value="30"><br>
    4: <input type="text" name="num4three" value="25"><br>
    5: <input type="text" name="num5three" value="20"><br>
    6: <input type="text" name="num6three" value="15"><br>
    7: <input type="text" name="num7three" value="10"><br>
    8: <input type="text" name="num8three" value="5">
</form>
  
  </div>

  <div>
  
<form>
    <h4>Number of days</h4>
    <input type="text" name="days1three" value="3"><br>
    <input type="text" name="days2three" value="3"><br>
    <input type="text" name="days3three" value="3"><br>
    <input type="text" name="days4three" value="3"><br>
    <input type="text" name="days5three" value="3"><br>
    <input type="text" name="days6three" value="3"><br>
    <input type="text" name="days7three" value="3"><br>
    <input type="text" name="days8three" value="3">
</form>
  </div>

   <div class="calculateDiv"> 
       
    <p><button onclick="calcSumthree()">Calculate</button></p>
    
    <p>Total amount: <input type="text" name="sumthree"></p>
    
    <p><input type="text" name="packsthree"> Packs  <input type="text" name="tabletsthree"> Tablet(s)</p>
       
  </div>
  
  </div>

</div>

</div>
	</section>

</main>

<?php include 'includes/footer.php';?>