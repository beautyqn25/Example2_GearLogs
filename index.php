<?php
require ('dbconnect.php');

//query the item type 
$sql_itemtype = "SELECT * " . 
		        "FROM tbl_itype ";

$result_itemtype = $pdo->query($sql_itemtype);

//query the item condition 
$sql_itemcondition = "SELECT * " . 
		             "FROM tbl_icondition ";

$result_itemcondition = $pdo->query($sql_itemcondition);
?>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    echo('<br>');
	include('menu.php');
	echo('<br>');
?>
<h3>Enter Your Photography Equipment:</h3>
<form method="POST" action="input_display.php">
	<table border="1">

	  <tr>
	  <th colspan="2">Photography Equipment:</th>
	  <tr>
	
    <tbody>
	  <tr>
	  <td>Item</td>
	  <td><input type="text" name="item" value="" size="20"></td>
	  </tr>	
      <tr>
	  <td>Type</td>
	  <td><select name="itemtype">
		   <?php
			  while($row = $result_itemtype->fetch())
			  {
	            echo('<option value="'.$row['itemtype'].'">'.$row['itemtype'].'</option>');
               }
		    ?>
           </select>
	   </td>
	   </tr>
	   <tr>
	   <td>Condition</td>
	   <td><select name="itemcondition">
		    <?php
			  while($row = $result_itemcondition->fetch())
			  {
	            echo('<option value="'.$row['itemcondition'].'">'.$row['itemcondition'].'</option>');
               }
		     ?>
            </select>
		</td>
	    </tr>
	    <tr>
	    <td>Quantity</td>
	    <td><input type="text" name="quantity" value="1" size="20"></td>
	    </tr>
	    <tr>
	    <td>Memo</td>
	    <td><input type="text" name="memo" value="" size="20"></td>
	    </tr>
	    <tr>
	    <td></td>
	    <td><input type="submit" value="Enter"></td>
	    </tr>
      </tbody>
      </table>	
      </form>
</body>
<html>
