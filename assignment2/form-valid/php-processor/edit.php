<?php
$cookie = $_COOKIE['userinfos'];
if(isset($cookie)) {
    $id = $_GET['id'];
    $records = json_decode(($cookie),true);
    $record = $records[$id];
    /* echo "<pre>";
     * print_r($record);
     * echo "</pre>";
     */
}



?>

<!-- 
     <!doctype html>
     <html lang="en">
     <head>
     <meta charset="UTF-8"/>
     <title>Form</title>
     </head>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link href="index.css" rel="stylesheet" type="text/css"/>
   -->
<?php require('../layout/header.php'); ?>

	<div class="panel panel-default panel-primary">
	    <div class="panel-heading ">Signup your information</div>
	    
	    <div class="panel-body">
	<form  method="post" class="form-horizontal" onsubmit="return validation();" action="./process.php" >
		<div class="form-group ">
		    <label class="control-label col-sm-2" for="fname">First Name</label>
		    <div class="col-sm-4">
			<input type="text" name="fname" class="form-control input-bg" id="fname" value="<?php echo $record['fname'];?>"></div>
			<label id="error_fname" class="alert-danger"></label>
		</div>
		<div class="form-group">
		    <label for="lname" class="control-label col-sm-2">Last Name</label>
		    <div class="col-sm-4">
			<input type="text" name="lname" class="form-control" id="lname" value="<?php echo $record['lname']; ?>"></div>
			<label id="error_lname" class="alert-danger"></label>
		</div>

		<div class="form-group" >
		    <label class="col-sm-2 control-label" for="email">Email</label>
		    <div class="col-sm-4">
			<input type="text" name="email" class="form-control" id="email" value="<?php echo $record['email']; ?>"></div>
			<label id="error_email" class="alert-danger"></label>
		</div>
		

		<div class="form-group" >
		    <label class="col-sm-2 control-label" for="phone">Phone</label>
		    <div class="col-sm-4">
			<input type="text" name="phone" class="form-control" id="phone" value="<?php echo $record['phone']; ?>">
		    </div>
		    <label id="error_phone" class="alert-danger"></label>
		</div>
		
		
		
		<div class="form-group">
		    <label for="age" class="control-label col-sm-2">Age</label>
		    <div class="col-sm-4">
			<input type="text" name="age" class="form-control" id="age" value="<?php echo $record['age']; ?>">
		    </div>
		    <label id="error_age" class="alert-danger"></label>
		</div>
		


		<div class="form-group">
		    <label class="col-sm-2 control-label" for="gender">Gender</label>
		    <div class="radio">
			<label><input type="radio" name="gender" value="male" <?php if($record['gender']=='male'){echo 'checked';} ?>> Male</label>	
			
			<label><input type="radio" name="gender" value="female" <?php if($record['gender']=='female'){echo 'checked';} ?>> Female</label> 
		    </div>
		    <label id="error_gender" style="margin-left: 680px; font-size: 16px;"  class="alert-danger"></label> 
		</div>

		<!-- <div class="form-group">
		     <label class="col-sm-2 control-label" for="hobbies">Hobbies</label>
		     <div class="checkbox">
		     <label><input type="checkbox" name="hobbies" > Singing..</label>
		     <label><input type="checkbox" name="hobbies" > Playing..</label>
		     <label><input type="checkbox" name="hobbies" > Dancing..</label>
		     <label><input type="checkbox" name="hobbies" > Reading..</label>
		     </div>
		     </div>
		     </div>     -->
		
		<input name="submit" type="submit" value="submit" class="btn btn-warning " data-toggle="tooltip" title="Click me to register"/>
		<input name="id" type="hidden" value="<?php echo $id ;?>"/>
		
		<p id="error" class="alert-danger"></p>
		<p id="submit-gareko" class="alert-danger"></p>

	    </form>

	</div>
	</div>


    <script src="./index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <?php require('../layout/footer.php'); ?>
    <!-- Latest compiled JavaScript
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    -->


