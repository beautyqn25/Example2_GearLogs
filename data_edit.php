<?php
require('dbconnect.php');

if(!empty($_POST['itemid']))
{
	//sql statement to update the data
	$sql_update = "UPDATE tbl_equipment SET ".
	              "item = :item, ".
				  "itemtype = :itemtype, ".
				  "itemcondition = :itemcondition, ".
				  "quantity = :quantity, ".
				  "memo = :memo ".
				  "WHERE itemid = :itemid";
				  
//prepare sql statement			  
	$sql_update = $pdo->prepare($sql_update);
	
//sanitize data
	$item = filter_var($_POST['item'], FILTER_SANITIZE_STRING);
	$itemtype = filter_var($_POST['itemtype'], FILTER_SANITIZE_STRING);
    $itemid = filter_var($_POST['itemid'], FILTER_SANITIZE_STRING);
	$itemcondition= filter_var($_POST['itemcondition'], FILTER_SANITIZE_STRING);
	$quantity = filter_var($_POST['quantity'], FILTER_SANITIZE_STRING);
	$memo = filter_var($_POST['memo'], FILTER_SANITIZE_STRING);
	
//bind parameter
$sql_update->bindparam(":item", $item);
$sql_update->bindparam(":itemtype", $itemtype);
$sql_update->bindparam(":itemid", $itemid);
$sql_update->bindparam(":itemcondition", $itemcondition);
$sql_update->bindparam(":quantity", $quantity);
$sql_update->bindparam(":memo", $memo);

//execute
$sql_update->execute();
header("Location: display_edit.php");
}

//get the data from database
$sql_editData =  "SELECT * FROM tbl_equipment WHERE itemid = ".$_SESSION['itemid'];
$rs_edit = $pdo->query($sql_editData);
$row_edit=$rs_edit->fetch();


//query the item's type 
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
<title>Edit Equipment</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    echo('<br>');
	include('menu.php');
	echo('<br>');
?>
	<h3>Edit Equipment Below:</h3>

	<form method="POST" action="data_edit.php">
		<table border="1">
			<thead>
				<tr>
				<th colspan="2">Edit Equipment: </th>
				<tr>
			</thead>
    <tbody>
	<tr>
	<td>Item</td>
	<td><input type="text" name="item" 
         value="<?php echo($row_edit['item']); ?>" size="20"></td>
	</tr>
	<tr>
	<td>Item Type</td>
	<td>
	   <select name="itemtype">
		<?php
		  while($row = $result_itemtype->fetch())
		  {
			if($row['itemtype']=== $row_edit['itemtype'])
			{
			 echo('<option value="'.$row['itemtype'].'" selected>'.$row['itemtype'].'</option>');
			}
			else
			{
	       echo('<option value="'.$row['itemtype'].'">'.$row['itemtype'].'</option>');
			}
           }
		?>
        </select>
		</td>
	<tr>
	<tr>
	<td>Item Condition</td>
	<td><select name="itemcondition">
		<?php
		while($row = $result_itemcondition->fetch())
		{
			if($row['itemcondition']=== $row_edit['itemcondition'])
			{
			 echo('<option value="'.$row['itemcondition'].'" selected>'.$row['itemcondition'].'</option>');
			}
			else
			{
	       echo('<option value="'.$row['itemcondition'].'">'.$row['itemcondition'].'</option>');
			}
        }
		?>
        </select></td>
	<tr>
	<td>Quantity</td>
	<td><input type="text" name="quantity" 
         value="<?php echo($row_edit['quantity']); ?>" size="20"></td>
	</tr>
	<tr>
	<td>Memo</td>
	<td><input type="text" name="memo" 
         value="<?php echo($row_edit['memo']); ?>" size="20"></td>
	</tr>

	<tr>
	<td>Item ID</td>
	<td><?php echo($row_edit['itemid']); ?></td>
	</tr>
	<tr>
	<td><input type="hidden" name="itemid" value="<?php echo($row_edit['itemid']); ?>"></td>
	<td><input type="submit"  value="Enter"></td>
	</tr>
</tbody>
</table>	

	</form>
</body>
</html>



   