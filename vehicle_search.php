<?php require_once('Connections/cardealer.php'); ?>
<?php
mysql_select_db($database_cardealer, $cardealer);
$query_rs_category = "SELECT * FROM vehiclecategory";
$rs_category = mysql_query($query_rs_category, $cardealer) or die(mysql_error());
$row_rs_category = mysql_fetch_assoc($rs_category);
$totalRows_rs_category = mysql_num_rows($rs_category);

mysql_select_db($database_cardealer, $cardealer);
$query_rs_bodytype = "SELECT * FROM bodytype";
$rs_bodytype = mysql_query($query_rs_bodytype, $cardealer) or die(mysql_error());
$row_rs_bodytype = mysql_fetch_assoc($rs_bodytype);
$totalRows_rs_bodytype = mysql_num_rows($rs_bodytype);

mysql_select_db($database_cardealer, $cardealer);
$query_rs_manufacturer = "SELECT * FROM manufacturer ORDER BY manufacturerName ASC";
$rs_manufacturer = mysql_query($query_rs_manufacturer, $cardealer) or die(mysql_error());
$row_rs_manufacturer = mysql_fetch_assoc($rs_manufacturer);
$totalRows_rs_manufacturer = mysql_num_rows($rs_manufacturer);

mysql_select_db($database_cardealer, $cardealer);
$query_rs_fuel = "SELECT * FROM fuel";
$rs_fuel = mysql_query($query_rs_fuel, $cardealer) or die(mysql_error());
$row_rs_fuel = mysql_fetch_assoc($rs_fuel);
$totalRows_rs_fuel = mysql_num_rows($rs_fuel);

mysql_select_db($database_cardealer, $cardealer);
$query_rs_transmission = "SELECT * FROM transmission";
$rs_transmission = mysql_query($query_rs_transmission, $cardealer) or die(mysql_error());
$row_rs_transmission = mysql_fetch_assoc($rs_transmission);
$totalRows_rs_transmission = mysql_num_rows($rs_transmission);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="false" -->
	<head>
	<!-- InstanceBeginEditable name="doctitle" -->
	<title>John Humphries Cars</title>
	<!-- InstanceEndEditable -->
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
	

	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="css/layout.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />

<!-- rollover image script -->

	<script type="text/JavaScript" src="scripts/imageswop.js">
	<!--
	//-->
	</script>


    <!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
	</head>
<body onload="MM_preloadImages('images/designed_by_l2_on.jpg')">

<div id="designcontainer">
  <div id="header">
  	<div id="logo"><a href="index.php"><img src="images/logo.jpg" alt="John Humphries" width="285" height="82" border="0" /></a></div>
	<div id="contactdetails">
	<p><span class="goldtext">Email:</span> enquiries@JohnHumphriesCars.co.uk<br />
	  <span class="goldtext">Tel:</span> 01296 734775<br />
	  <span class="goldtext">Fax: </span>01296 734776</p>
</div>
		
    <!-- end header -->
  </div>
  <div id="topnavbar" class="navTextTop">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="results.php">Cars for Sale</a></li>
	  <li><a href="vehicle_search.php">Search for a Car</a></li>
	  <li><a href="contact-us.php">Contact Us</a></li>
    </ul>
  </div>
  
  <div id="maincontainer">
  <!-- InstanceBeginEditable name="EditRegion1" -->
  <div id="maincontainer">
    <div id="subpage_column_1">
	  
	  <form id="frm_search" name="frm_search" method="get" action="results.php">	 
	   
	   <label>Vehicle Category: </label>
		<select name="category" id="category">
              <option value="0">any</option>
              <?php
do {  
?>
              <option value="<?php echo $row_rs_category['categoryID']?>"><?php echo $row_rs_category['category']?></option>
<?php
} while ($row_rs_category = mysql_fetch_assoc($rs_category));
  $rows = mysql_num_rows($rs_category);
  if($rows > 0) {
      mysql_data_seek($rs_category, 0);
	  $row_rs_category = mysql_fetch_assoc($rs_category);
  }
?>
            </select><br/>
          
		  <label>Body Type: </label>
            <select name="bodytype" id="bodytype">
              <option value="0">any</option>
              <?php
do {  
?><option value="<?php echo $row_rs_bodytype['bodytypeID']?>"><?php echo $row_rs_bodytype['body']?></option><?php
} while ($row_rs_bodytype = mysql_fetch_assoc($rs_bodytype));
  $rows = mysql_num_rows($rs_bodytype);
  if($rows > 0) {
      mysql_data_seek($rs_bodytype, 0);
	  $row_rs_bodytype = mysql_fetch_assoc($rs_bodytype);
  }
?>
                </select><br/>
          
		  <label>Manufacturer: </label>

            <select name="manufacturer" id="manufacturer">
              <option value="0">any</option>
              <?php
do {  
?>
              <option value="<?php echo $row_rs_manufacturer['manufacturerID']?>"><?php echo $row_rs_manufacturer['manufacturerName']?></option>
              <?php
} while ($row_rs_manufacturer = mysql_fetch_assoc($rs_manufacturer));
  $rows = mysql_num_rows($rs_manufacturer);
  if($rows > 0) {
      mysql_data_seek($rs_manufacturer, 0);
	  $row_rs_manufacturer = mysql_fetch_assoc($rs_manufacturer);
  }
?>
                </select><br/>
          
		  <label>Fuel: </label>

            <select name="fuel" id="fuel">
              <option value="0">any</option>
              <?php
do {  
?>
              <option value="<?php echo $row_rs_fuel['fuelID']?>"><?php echo $row_rs_fuel['fuel']?></option>
              <?php
} while ($row_rs_fuel = mysql_fetch_assoc($rs_fuel));
  $rows = mysql_num_rows($rs_fuel);
  if($rows > 0) {
      mysql_data_seek($rs_fuel, 0);
	  $row_rs_fuel = mysql_fetch_assoc($rs_fuel);
  }
?>
            </select><br/>
          
		  <label>Transmission: </label>

            <select name="transmission" id="transmission">
              <option value="0">any</option>
              <?php
do {  
?>
              <option value="<?php echo $row_rs_transmission['transmissionID']?>"><?php echo $row_rs_transmission['transmission']?></option>
              <?php
} while ($row_rs_transmission = mysql_fetch_assoc($rs_transmission));
  $rows = mysql_num_rows($rs_transmission);
  if($rows > 0) {
      mysql_data_seek($rs_transmission, 0);
	  $row_rs_transmission = mysql_fetch_assoc($rs_transmission);
  }
?>
            </select><br/>
          
		  <label>Price: </label>

            <select name="price" id="price">
              <option value="0">any</option>
              <option value="5000">up to &pound;5,000</option>
              <option value="10000">&pound;5,000 to &pound;10,000</option>
              <option value="15000">&pound;10,000 to &pound;15,000</option>
              <option value="20000">&pound;15,000 to &pound;20,000</option>
              <option value="25000">&pound;20,000 to &pound;25,000</option>
              <option value="25001">Over &pound;25,000</option>
             </select><br/>
			<div class="searchbtn">
            <input name="Submit" type="submit" id="Submit" value="Search" class="submit"/>
			</div>
      </form>

    </div>
  </div>
  <!-- InstanceEndEditable -->
  </div>  <!-- end maincontainer -->
  
  <div id="footer" >
    
        <div id="lamtha2logo"><a href="http://www.lamtha2.co.uk" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Lamtha2logo','','images/designed_by_l2_on.jpg',1)"><img src="images/designed_by_l2_off.jpg" alt="Lamtha2 Web Design" name="Lamtha2logo" width="89" height="29" border="0" id="Lamtha2logo" /></a></div>
		
		<p class="copyrightText">&copy; 2008 - <?php echo date("Y"); ?> John Humphries Cars, all rights reserved.</p>
  </div>
  <!-- end footer -->
</div>


  <!-- end designcontainer -->
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($rs_category);

mysql_free_result($rs_bodytype);

mysql_free_result($rs_manufacturer);

mysql_free_result($rs_fuel);

mysql_free_result($rs_transmission);
?>