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

if (isset($_COOKIE['userinfos'])) {
    $userINFOs = json_decode($_COOKIE['userinfos'],true);
    /* echo "<pre>";
     * print_r($userINFOs);
     * echo "</pre>";*/
}


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
	    $i=1; 
	    if(is_array($userINFOs)){
		foreach($userINFOs as $key=>$info){
	    ?>
		<tr class="success">
		    <td><?php echo $i++?></td>
		    <td><?php echo $info['fname'];?></td>
		    <td><?php echo $info['lname']; ?></td>
		    <td><?php echo $info['email']; ?></td>
		    <td><?php echo $info['age']; ?></td>
		    <td><?php echo $info['phone']; ?></td>
		    <td><?php echo $info['gender']; ?></td>
		    <td><a onclick="return delete_validate();" href="./delete.php?id=<?php echo $key; ?>">Delete Cookie</a> | 
			<a href="./edit.php?id=<?php echo $key; ?>" >Edit Cookie</a></td>
		</tr>		
	    <?php	}
	    }
	    ?>
	</table>
    </div>
</div>

<?php require('../layout/footer.php'); ?>


