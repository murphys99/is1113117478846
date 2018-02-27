/* global $ */

function validateName(){
    var Name;
    
    Name=document.getElementById("name").value;
    
    if(Name==""){
        alert("Please enter your name");
        document.form.name.focus();
    }
    
    if(!isNaN(Name))
{
alert("Please Enter Only Characters");
}
    else{
        validateEmail();
    }
}

   
   
   
   
   
    function validateEmail(){
    
    var email;
   
     email=document.getElementById("email_address").value;
    
    
    if (email == ""){
        alert("Please enter your email correctly");
        document.form.name.focus();
    }
    
    else if (validateUserEmail==false){
    alert("Please Enter a Valid Email");
    document.form.name.focus();
        
    }
    
    else{
        validatepin();
}

        
    }
    
    
    
    
    
   function validateUserEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
    
    
    
    
    
    
    
    function validatepin(){

    

    var pin;

    

    pin = document.getElementById("user_pin").value;

    

    if (pin == ""){

        alert("Please enter your PIN");
        document.form.name.focus();

    }

    else if (String(pin).length < 4){

        alert("Please make sure your PIN is accurate");
        document.form.name.focus();

    }
    else{
        enablebtnPurchase();
    }
}





function enablebtnPurchase(){

    $('#btnPurchase').prop('disabled', false);

}



function disablebtnPurchase(){

    $('#btnPurchase').prop('disabled', true);

}