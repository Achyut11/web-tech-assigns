<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Document</title>
	<link href="./style.css" rel="stylesheet"/>
    </head>
    <body>
	<fieldset>
	    <legend>Personal information</legend>
	    <form action="" method="post">

	    <form method="post">

		FirstName: <br/>
		<input type="text" name="fname" value="" ><br>
      		LastName: <br/>
		<input type="text" name="lname" value=""><br>
		<br>
		Address: <br>
		<input type="text" name="address" value=""><br>
		<br>
		Age: <br/>
		<input name="age" type="number" min="1" max="50"/>
		<br>
		<br/>
		
		Gender: <br>
		Male: 
		<input type="radio" name="gender" >
		<br>
		Female:
		<input type="radio" name="gender">
		<br><br/>

		What do you like: <br>
		<input type="checkbox" name="vehiclea" value="Bike">  Bike<br>
		<input type="checkbox" name="vehicleb" value="Car">  Car <br>
		<br>
		About you:
		<br/>
		<textarea rows="4" cols="50" name="comment" form="usrform"> Enter your description here</textarea>
		<!-- <textarea rows="4" cols="50"> -->
		<br>
		<br/>
		
		<input type="submit" value="Submit">   <input type="reset" value="reset"/>
		
	</fieldset>

	</form>

    </body>
</html>
