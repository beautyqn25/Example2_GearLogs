<?php
require('dbconnect.php');

//sql statement
$sql_input = 	"INSERT INTO tbl_equipment " .
			"(item, itemtype, itemcondition, quantity, memo) ".
			"VALUES ".
			"(:item,:itemtype,:itemcondition,:quantity,:memo)";

//prepare sql statement
$sql_input = $pdo->prepare($sql_input);

//sanitize data
$item = filter_var($_POST['item'], FILTER_SANITIZE_STRING);
$itemtype = filter_var($_POST['itemtype'], FILTER_SANITIZE_STRING);
$itemcondition = filter_var($_POST['itemcondition'], FILTER_SANITIZE_STRING);
$quantity = filter_var($_POST['quantity'], FILTER_SANITIZE_STRING);
$memo = filter_var($_POST['memo'], FILTER_SANITIZE_STRING);


//bind data
$sql_input->bindparam(":item",$item);
$sql_input->bindparam(":itemtype",$itemtype);
$sql_input->bindparam(":itemcondition",$itemcondition);
$sql_input->bindparam(":quantity",$quantity);
$sql_input->bindparam(":memo",$memo);

//execute query
$sql_input->execute();

?>
<html>
<head>
<title>Confirm Equipment</title>
<link rel="stylesheet" href="style.css">
</head>
<?php
    echo('<br>');
	include('menu.php')
?>
<body>
<?php
	echo("<table border='0'>
	<tr>
	    <th colspan='2'><b>Entered Equipment:</b></th>
	</tr>
	<tr>
		<td><b>Item:</b></td>
		<td>$item</td>
	</tr>
	<tr>
		<td><b>Type:</b></td><br>
		<td>$itemtype</td>
	</tr>
	<tr>
		<td><b>Condition:</b></td><br>
		<td>$itemcondition</td>
	</tr>
	<tr>
		<td><b>Quantity:</b></td><br>
		<td>$quantity</td>
	</tr>
	<tr>
		<td><b>Memo:</b></td><br>
		<td>$memo</td>
    </tr>

	</table><br>
	  ");   
	 echo('<h3>Your Equipment has been updated!<h3>');
	 echo('<br><a href="display_edit.php">View Inventory List</a>');
	?>
</body>
<html>

