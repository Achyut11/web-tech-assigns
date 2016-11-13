<script>
 function delete_validate() {
     if(confirm("Do you really want to delete this?") == true ) {
	 location.href = './delete.php?id=<?php echo $key; ?>';
	 
     }

     else {
	 location.href = './list.php';
     }
 }


</script>


<?php

// if (isset($_COOKIE['userinfos'])) {
//     $userINFOs = json_decode($_COOKIE['userinfos'],true);
//     /* echo "<pre>";
//      * print_r($userINFOs);
//      * echo "</pre>";*/
// }
include '../database.php';

?>


<?php require('../layout/header.php'); ?>
<link href="../layout/index.css" rel="stylesheet" type="text/css"/>

<div class="panel panel-default">
    <h1>User Information</h1>
    <div class="table-responsive">
	<table class="table table-stripped table-hover">
	    <tr>
		<th>S.No</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Age</th>
		<th>Phone</th>
		<th>Gender</th>
		<th>Options</th>
	    </tr>
	    <?php
	    $sqlquery = "SELECT * from persons";
	    $result = mysqli_query($connection,$sqlquery);
	    $i=1;
	    while($row=mysqli_fetch_row($result))
	    /* if(is_array($userINFOs)){
	       foreach($userINFOs as $key=>$info){ */
	    {
		$key=$row[0];
	    ?>

		<tr class="success">
		<td><?php echo $i++;?></td>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		    <td><a onclick="return delete_validate();" href="./delete.php?id=<?php echo $key; ?>">Delete </a> | 
			<a href="./edit.php?id=<?php echo $key; ?>" >Edit </a></td>
		</tr>		
	    <?php } ?>
	</table>
    </div>
</div>

<?php require('../layout/footer.php'); ?>


