<?php require_once('Connections/cardealer.php'); ?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

mysql_select_db($database_cardealer, $cardealer);

$colname_rs_vehicledetails = "-1";
if (isset($_GET['price'])) {
  $colname_rs_vehicledetails = (get_magic_quotes_gpc()) ? $_GET['price'] : addslashes($_GET['price']);

/* start of code for search results */

switch($colname_rs_vehicledetails)
{

case "5000"; 
$query_rs_vehicledetails = sprintf("SELECT * FROM vehicledata, fuel, registration, transmission 
WHERE price <= 5000 
AND (". $_GET['category'] ." = 0 OR vehicledata.category = ". $_GET['category'] .")
AND (". $_GET['bodytype'] ." = 0 OR vehicledata.bodytype = ". $_GET['bodytype'] .") 
AND (". $_GET['manufacturer'] ." =0 OR vehicledata.manufacturer = ". $_GET['manufacturer'] ." )
AND (". $_GET['fuel'] ." = 0 OR vehicledata.fuel = ". $_GET['fuel'] .") 
AND (". $_GET['transmission'] ." = 0 OR vehicledata.transmission = ". $_GET['transmission'] .")
AND vehicledata.fuel = fuel.fuelID AND vehicledata.registration = registration.RegistrationID AND vehicledata.transmission = transmission.transmissionID
ORDER BY price ASC", $colname_rs_vehicledetails);
break;

case "10000";  
$query_rs_vehicledetails = sprintf("SELECT * FROM vehicledata, fuel, registration, transmission WHERE price > 5000 AND price <= 10000 
AND (". $_GET['category'] ." = 0 OR vehicledata.category = ". $_GET['category'] .")
AND (". $_GET['bodytype'] ." = 0 OR vehicledata.bodytype = ". $_GET['bodytype'] .") 
AND (". $_GET['manufacturer'] ." =0 OR vehicledata.manufacturer = ". $_GET['manufacturer'] ." )
AND (". $_GET['fuel'] ." = 0 OR vehicledata.fuel = ". $_GET['fuel'] .") 
AND (". $_GET['transmission'] ." = 0 OR vehicledata.transmission = ". $_GET['transmission'] .")
AND vehicledata.fuel = fuel.fuelID AND vehicledata.registration = registration.RegistrationID AND vehicledata.transmission = transmission.transmissionID
ORDER BY price ASC", $colname_rs_vehicledetails);
break;

case "15000";  
$query_rs_vehicledetails = sprintf("SELECT * FROM vehicledata, fuel, registration, transmission WHERE price > 10000 AND price <= 15000 
AND (". $_GET['category'] ." = 0 OR vehicledata.category = ". $_GET['category'] .")
AND (". $_GET['bodytype'] ." = 0 OR vehicledata.bodytype = ". $_GET['bodytype'] .") 
AND (". $_GET['manufacturer'] ." =0 OR vehicledata.manufacturer = ". $_GET['manufacturer'] ." )
AND (". $_GET['fuel'] ." = 0 OR vehicledata.fuel = ". $_GET['fuel'] .") 
AND (". $_GET['transmission'] ." = 0 OR vehicledata.transmission = ". $_GET['transmission'] .")
AND vehicledata.fuel = fuel.fuelID AND vehicledata.registration = registration.RegistrationID AND vehicledata.transmission = transmission.transmissionID
ORDER BY price ASC", $colname_rs_vehicledetails);
break;

case "20000";  
$query_rs_vehicledetails = sprintf("SELECT * FROM vehicledata, fuel, registration, transmission WHERE price > 15000 AND price <= 20000
AND (". $_GET['category'] ." = 0 OR vehicledata.category = ". $_GET['category'] .")
AND (". $_GET['bodytype'] ." = 0 OR vehicledata.bodytype = ". $_GET['bodytype'] .") 
AND (". $_GET['manufacturer'] ." =0 OR vehicledata.manufacturer = ". $_GET['manufacturer'] ." )
AND (". $_GET['fuel'] ." = 0 OR vehicledata.fuel = ". $_GET['fuel'] .") 
AND (". $_GET['transmission'] ." = 0 OR vehicledata.transmission = ". $_GET['transmission'] .")
AND vehicledata.fuel = fuel.fuelID AND vehicledata.registration = registration.RegistrationID AND vehicledata.transmission = transmission.transmissionID
ORDER BY price ASC", $colname_rs_vehicledetails);
break;

case "25000";  
$query_rs_vehicledetails = sprintf("SELECT * FROM vehicledata, fuel, registration, transmission WHERE price > 20000 AND price <= 25000
AND (". $_GET['category'] ." = 0 OR vehicledata.category = ". $_GET['category'] .")
AND (". $_GET['bodytype'] ." = 0 OR vehicledata.bodytype = ". $_GET['bodytype'] .") 
AND (". $_GET['manufacturer'] ." =0 OR vehicledata.manufacturer = ". $_GET['manufacturer'] ." )
AND (". $_GET['fuel'] ." = 0 OR vehicledata.fuel = ". $_GET['fuel'] .") 
AND (". $_GET['transmission'] ." = 0 OR vehicledata.transmission = ". $_GET['transmission'] .")
AND vehicledata.fuel = fuel.fuelID AND vehicledata.registration = registration.RegistrationID AND vehicledata.transmission = transmission.transmissionID
ORDER BY price ASC", $colname_rs_vehicledetails);
break;

case "25001";  
$query_rs_vehicledetails = sprintf("SELECT * FROM vehicledata, fuel, registration, transmission WHERE price > 25000 
AND (". $_GET['category'] ." = 0 OR vehicledata.category = ". $_GET['category'] .")
AND (". $_GET['bodytype'] ." = 0 OR vehicledata.bodytype = ". $_GET['bodytype'] .") 
AND (". $_GET['manufacturer'] ." =0 OR vehicledata.manufacturer = ". $_GET['manufacturer'] ." )
AND (". $_GET['fuel'] ." = 0 OR vehicledata.fuel = ". $_GET['fuel'] .") 
AND (". $_GET['transmission'] ." = 0 OR vehicledata.transmission = ". $_GET['transmission'] .")
AND vehicledata.fuel = fuel.fuelID AND vehicledata.registration = registration.RegistrationID AND vehicledata.transmission = transmission.transmissionID
ORDER BY price ASC", $colname_rs_vehicledetails);
break;

default;  
$query_rs_vehicledetails = sprintf("SELECT * FROM vehicledata, fuel, registration, transmission 
WHERE  price > 0 
AND (". $_GET['category'] ." = 0 OR vehicledata.category = ". $_GET['category'] .")
AND (". $_GET['bodytype'] ." = 0 OR vehicledata.bodytype = ". $_GET['bodytype'] .") 
AND (". $_GET['manufacturer'] ." =0 OR vehicledata.manufacturer = ". $_GET['manufacturer'] ." )
AND (". $_GET['fuel'] ." = 0 OR vehicledata.fuel = ". $_GET['fuel'] .") 
AND (". $_GET['transmission'] ." = 0 OR vehicledata.transmission = ". $_GET['transmission'] .")
AND vehicledata.fuel = fuel.fuelID AND vehicledata.registration = registration.RegistrationID AND vehicledata.transmission = transmission.transmissionID
ORDER BY price ASC", $colname_rs_vehicledetails);
break;
} 

/* end of code for search results */

 } else { 

/* start of code for vehicle list */

$query_rs_vehicledetails = "SELECT * FROM vehicledata, fuel, registration, transmission where vehicledata.fuel = fuel.fuelID AND vehicledata.registration = registration.RegistrationID AND vehicledata.transmission = transmission.transmissionID ORDER BY price ASC";

/* end of code for vehicle list */

 } /* end of if else */



$rs_vehicledetails = mysql_query($query_rs_vehicledetails, $cardealer) or die(mysql_error());
$row_rs_vehicledetails = mysql_fetch_assoc($rs_vehicledetails);
$totalRows_rs_vehicledetails = mysql_num_rows($rs_vehicledetails);


$maxRows_rs_vehicledetails = 3;
$pageNum_rs_vehicledetails = 0;
if (isset($_GET['pageNum_rs_vehicledetails'])) {
  $pageNum_rs_vehicledetails = $_GET['pageNum_rs_vehicledetails'];
}
$startRow_rs_vehicledetails = $pageNum_rs_vehicledetails * $maxRows_rs_vehicledetails;

$colname_rs_vehicledetails = "-1";
if (isset($_POST['price'])) {
  $colname_rs_vehicledetails = (get_magic_quotes_gpc()) ? $_POST['price'] : addslashes($_POST['price']);
}
mysql_select_db($database_cardealer, $cardealer);


$query_limit_rs_vehicledetails = sprintf("%s LIMIT %d, %d", $query_rs_vehicledetails, $startRow_rs_vehicledetails, $maxRows_rs_vehicledetails);
$rs_vehicledetails = mysql_query($query_limit_rs_vehicledetails, $cardealer) or die(mysql_error());
$row_rs_vehicledetails = mysql_fetch_assoc($rs_vehicledetails);

if (isset($_GET['totalRows_rs_vehicledetails'])) {
  $totalRows_rs_vehicledetails = $_GET['totalRows_rs_vehicledetails'];
} else {
  $all_rs_vehicledetails = mysql_query($query_rs_vehicledetails);
  $totalRows_rs_vehicledetails = mysql_num_rows($all_rs_vehicledetails);
}
$totalPages_rs_vehicledetails = ceil($totalRows_rs_vehicledetails/$maxRows_rs_vehicledetails)-1;


$queryString_rs_vehicledetails = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rs_vehicledetails") == false && 
        stristr($param, "totalRows_rs_vehicledetails") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rs_vehicledetails = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rs_vehicledetails = sprintf("&totalRows_rs_vehicledetails=%d%s", $totalRows_rs_vehicledetails, $queryString_rs_vehicledetails);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

        <?php if ($totalRows_rs_vehicledetails > 0) { // Show if recordset not empty ?>
          <table width="100%" border="0" align="center" cellpadding="5">      
            <?php do { ?>
            <tr>
              <td width="31%" rowspan="3"><a href="vehicle_details.php?vehicleID=<?php echo $row_rs_vehicledetails['vehicleID']; ?>"><img src="./vehicledata/<?php echo $row_rs_vehicledetails['image1']; ?>" alt="<?php echo $row_rs_vehicledetails['title']; ?>" width="185" height="138" border="0" /></a></td>
              <td colspan="2"><h2><?php echo $row_rs_vehicledetails['title']; ?></h2></td>
            </tr>
            <tr>
              <td width="32%"><p><strong>Registered:</strong> <?php echo $row_rs_vehicledetails['regYear']; ?><br />
                      <strong>Colour:</strong> <?php echo $row_rs_vehicledetails['colour']; ?><br />
                      <strong>Mileage:</strong> <?php echo $row_rs_vehicledetails['mileage']; ?></p></td>
              <td width="37%"><p><strong>Transmission:</strong> <?php echo $row_rs_vehicledetails['transmission']; ?><br />
                  <strong>Fuel:</strong> <?php echo $row_rs_vehicledetails['fuel']; ?><br />
                  <strong>Price: </strong>&pound;<?php echo $row_rs_vehicledetails['price']; ?></p></td>
            </tr>
            <tr>
              <td colspan="2"><p><a href="vehicle_details.php?vehicleID=<?php echo $row_rs_vehicledetails['vehicleID']; ?>">Click for  details</a></p></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="2">&nbsp;</td>
            </tr>        
            <?php } while ($row_rs_vehicledetails = mysql_fetch_assoc($rs_vehicledetails)); ?>
          </table>
		  
		  <p><a href="#" onclick="history.go(-1);return false;">Back</a> </p>
		  
          <p>Showing <?php echo ($startRow_rs_vehicledetails + 1) ?> to <?php echo min($startRow_rs_vehicledetails + $maxRows_rs_vehicledetails, $totalRows_rs_vehicledetails) ?> of <?php echo $totalRows_rs_vehicledetails ?></p>

		  
		  
		  <p>
        <?php if ($pageNum_rs_vehicledetails > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_rs_vehicledetails=%d%s", $currentPage, 0, $queryString_rs_vehicledetails); ?>">&lt;&lt;</a>
          <?php } // Show if not first page ?>
        <?php if ($pageNum_rs_vehicledetails > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_rs_vehicledetails=%d%s", $currentPage, max(0, $pageNum_rs_vehicledetails - 1), $queryString_rs_vehicledetails); ?>">Prev</a>
          <?php } // Show if not first page ?>
        <?php if ($pageNum_rs_vehicledetails < $totalPages_rs_vehicledetails) { // Show if not last page ?>
          <a href="<?php printf("%s?pageNum_rs_vehicledetails=%d%s", $currentPage, min($totalPages_rs_vehicledetails, $pageNum_rs_vehicledetails + 1), $queryString_rs_vehicledetails); ?>">Next</a>
          <?php } // Show if not last page ?>
        <?php if ($pageNum_rs_vehicledetails < $totalPages_rs_vehicledetails) { // Show if not last page ?>
          <a href="<?php printf("%s?pageNum_rs_vehicledetails=%d%s", $currentPage, $totalPages_rs_vehicledetails, $queryString_rs_vehicledetails); ?>">&gt;&gt;</a>
          <?php } // Show if not last page ?>
      </p>
	  
	            <?php } // Show if recordset not empty ?>
				
				
				
      <?php if ($totalRows_rs_vehicledetails == 0) { // Show if recordset empty ?>
          <h1>Sorry, No Vehicles Match Your Criteria</h1>
          <p><a href="#" onclick="history.go(-1);return false;">Back</a></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
    <?php } // Show if recordset empty ?></div>

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
mysql_free_result($rs_vehicledetails);
?>
