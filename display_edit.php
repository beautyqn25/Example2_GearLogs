<?php

require('dbconnect.php');

if(isset($_POST))
{
	if(!empty($_POST['action']))
	{
		if($_POST['action'] === 'Delete')
		{
			$itemID = filter_var($_POST['itemid'], FILTER_SANITIZE_STRING);
			$sql_delete = "DELETE FROM tbl_equipment WHERE itemid = ".$itemID;
			$pdo->exec($sql_delete);
        }

		if($_POST['action'] === 'Edit')
		{
		$_SESSION['itemid'] = filter_var($_POST['itemid'], FILTER_SANITIZE_STRING);
		header("Location:data_edit.php");
        }
    }

}

//edit the equipment data
$sql_edit =  "SELECT * FROM tbl_equipment ORDER BY itemid";

$rs_edit = $pdo->query($sql_edit);

?>
<html>
<head>
<title>Display Inventory</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    echo('<br>');
	include('menu.php');
	echo('<br>');
?>
<h3>Inventory List:</h3>
<table border="1">
			
			<thead colspan="7">
            <tr>				
				<td><b>Item Name</b></td>
		        <td><b>Item Type</b></td>
                <td><b>Condition</b></td>
                <td><b>Qty</b></td>
                <td><b>Memo</b></td>
                <td><b>Edit</b></td>
		        <td><b>Delete</b></td> 
			</tr>
            </thead>			
			
   <tbody>
	<?php
		while($row = $rs_edit->fetch())
		{
			echo('<tr>'
				.'<td>'.$row['item'].'</td>'
				.'<td>'.$row['itemtype'].'</td>'
				.'<td>'.$row['itemcondition'].'</td>'
				.'<td>'.$row['quantity'].'</td>'
				.'<td>'.$row['memo'].'</td>'
				.'<td>'
                .'<form method="POST" action="display_edit.php" 
                   onsubmit="return confirm('."'Are you sure you want to edit this equipment?'".')">'
                .'<input type="hidden" name="itemid" value="'.$row['itemid'].'">'
                .'<input type="submit" value="Edit" name="action">'
                .'</form>'
				.'</td>'
				.'<td>'
                .'<form method="POST" action="display_edit.php" 
                   onsubmit="return confirm('."'Are you sure you want to delete this equipment?'".')">'
                .'<input type="hidden" name="itemid" value="'.$row['itemid'].'">'				
                .'<input type="submit" value="Delete" name="action">'
                .'</form>'
				.'</td>'
				.'</tr>');
        }
	?>
    </tbody>
</table>


</body>
</html>
