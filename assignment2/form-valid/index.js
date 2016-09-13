
function validation() {

    var myFormReturn = false; 
    var fname = document.getElementById('fname').value;
    if (fname == "" || !isNaN(parseInt(fname))) {
	myFormReturn = true;
	document.getElementById('error_fname').innerHTML = "Name cannot be empty or numeric.";

    }

    var lname = document.getElementById('lname').value;
        if (lname == "" || !isNaN(parseInt(lname))) {
	    myFormReturn = true;
	    document.getElementById('error_lname').innerHTML = "Name cannot be empty or numeric.";

    }



    var email = document.getElementById('email').value;
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (email == "" || !email.match(re))
    {

	myFormReturn = true;
    	document.getElementById('error_email').innerHTML = "Email is empty or not valid";


    }

    
    
    var phone = document.getElementById('phone').value;
    var regex = /^\d{10}$/; 
    if (phone == "" || isNaN(parseInt(phone)) || phone.length != 10 )
    {
	myFormReturn = true;
    	document.getElementById('error_phone').innerHTML = " phone must be standard 10 numbered " ;
    }	



    

    
    var age = document.getElementById('age').value;
    if( age == "" || isNaN(age) || age >= 100 )
    {

	myFormReturn = true;
    	document.getElementById('error_age').innerHTML = "Age is invalid";
	
    }
    
    var sex = document.getElementsByName('gender');
    if ( sex[0].checked == false && sex[1].checked == false )
    {

    	document.getElementById('error_gender').innerHTML = "select the gender";
	return false;
    }

}





