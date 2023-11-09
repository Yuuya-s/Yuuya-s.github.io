document.getElementById("form").addEventListener('submit', function(event){
   var pass = document.getElementById('password').value;
   var user = document.getElementById('username').value;
   var error = "Username or Password must not be empty"
   if(pass == "" || user == ""){
    alert(error);
    event.preventDefault;
   }
})