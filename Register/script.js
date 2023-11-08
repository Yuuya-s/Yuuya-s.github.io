document.getElementById("form").addEventListener('submit', function(event){
    var first = document.getElementById('first').value;
    var second = document.getElementById('second').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var pass = document.getElementById('password').value;
    var passw = document.getElementById('password').value;
    var error = "Firstname,secondname,email or phone number must not be empty"
    if(first == "" || second == "" || email == "" || phone == "" || pass == "" || passw == "" ){
     alert(error);
     event.preventDefault;
    }else if(password.length >= 8){
        if (pass == passw) {
            Message.textcontext = "Password Match";
            
        }
        
      else{
        Message.textcontext = "Password don't match";
     }
    }
console.log(pass); 
   
 })
 
 