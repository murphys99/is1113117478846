/* global $ */

function validateName(){
    var Name;
    
    Name=document.getElementById("name").value;
    
    if(Name==""){
        alert("Please enter your email correctly");
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
    }
    
    else{
        validatepin();
}

        
    }
    
    
    function validatepin(){

    

    var pin;

    

    pin = document.getElementById("user_pin").value;

    

    if (pin == ""){

        alert("Please enter your PIN");

    }

    else if (String(pin).length < 4){

        alert("Please make sure your PIN is accurate");

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