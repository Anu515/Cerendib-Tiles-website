
//form validation
function formvalidate(){
    
    var name = document.form.name.value;
    var phone=document.form.phone.value;
    var email = document.form.email.value;
    var message = document.form.message.value;

        // validation fails if the input is blank
        if(name == ""|| phone == ""|| email== "" || message== "") 
        {
            alert("Error: Input is empty!");
            return false;
        }
        if (!Email.includes("@",".")) 
	{
	    alert("Not a valid e-mail address");
	    return false;
    }   
    
}