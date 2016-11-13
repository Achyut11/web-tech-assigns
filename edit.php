<?php
//$cookie = $_COOKIE['userinfos'];
include './database.php';
if(isset($_GET['id'])) {
    $id=$_GET['id'];
    // $records = json_decode(($cookie),true);
    // $record = $records[$id];
    /* echo "<pre>";
     * print_r($record);
     * echo "</pre>";
     */
    $sqlquery = "SELECT * FROM persons WHERE id=".$id;
    $result = mysqli_query($connection,$sqlquery);
    $row = mysqli_fetch_array($result);
    $fname=$row[1];
    $lname=$row[2];
    $email=$row[3];
    $phone=$row[4];
    $age=$row[5];
    $gender=$row[6];
}



?>

<?php require('./header.php'); ?>

	<div class="panel panel-default panel-primary">
	    <div class="panel-heading ">Signup your information</div>
	    
	    <div class="panel-body">
	<form  action="./process.php" method="post" class="form-horizontal" onsubmit="return validation();">
		<div class="form-group ">
		    <label class="control-label col-sm-2" for="fname">First Name</label>
		    <div class="col-sm-4">
			<input type="text" name="fname" class="form-control input-bg" id="fname" value="<?php echo $fname;?>"></div>
			<label id="error_fname" class="alert-danger"></label>
		</div>
		<div class="form-group">
		    <label for="lname" class="control-label col-sm-2">Last Name</label>
		    <div class="col-sm-4">
			<input type="text" name="lname" class="form-control" id="lname" value="<?php echo $lname; ?>"></div>
			<label id="error_lname" class="alert-danger"></label>
		</div>

		<div class="form-group" >
		    <label class="col-sm-2 control-label" for="email">Email</label>
		    <div class="col-sm-4">
			<input type="text" name="email" class="form-control" id="email" value="<?php echo $email; ?>"></div>
			<label id="error_email" class="alert-danger"></label>
		</div>
		

		<div class="form-group" >
		    <label class="col-sm-2 control-label" for="phone">Phone</label>
		    <div class="col-sm-4">
			<input type="text" name="phone" class="form-control" id="phone" value="<?php echo $phone; ?>">
		    </div>
		    <label id="error_phone" class="alert-danger"></label>
		</div>
		
		
		
		<div class="form-group">
		    <label for="age" class="control-label col-sm-2">Age</label>
		    <div class="col-sm-4">
			<input type="text" name="age" class="form-control" id="age" value="<?php echo $age; ?>">
		    </div>
		    <label id="error_age" class="alert-danger"></label>
		</div>
		


		<div class="form-group">
		    <label class="col-sm-2 control-label" for="gender">Gender</label>
		    <div class="radio">
			<label><input type="radio" name="gender" value="male" <?php if($gender=='male'){echo 'checked';} ?>> Male</label>	
			
			<label><input type="radio" name="gender" value="female" <?php if($gender=='female'){echo 'checked';} ?>> Female</label> 
		    </div>
		    <label id="error_gender" style="margin-left: 680px; font-size: 16px;"  class="alert-danger"></label> 
		</div>

		<input name="id" type="hidden" value="<?php echo $id;?>"/>
		<input name="update" type="submit" value="update" class="btn btn-warning " data-toggle="tooltip" title="Click me to update"/>

		
		<p id="error" class="alert-danger"></p>
		<p id="submit-gareko" class="alert-danger"></p>

	    </form>

	</div>
	</div>
	<?php require('./footer.php'); ?>


