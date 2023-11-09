document.getElementById("form").addEventListener('submit', function(event){
    var first = document.getElementById('first').value;
    var second = document.getElementById('second').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var pass = document.getElementById('password').value;
    var passw = document.getElementById('password').value;
    var error = "Firstname, secondname, email, or phone number must not be empty"; // Added spaces for readability

    if(first === "" || second === "" || email === "" || phone === "" || pass === "" || passw === ""){
        alert(error);
        event.preventDefault(); // Corrected event.preventDefault to event.preventDefault()
    } else if (pass.length >= 8) { // Changed 'password' to 'pass'
        if (pass === passw) {
            // Use innerHTML or textContent to set the message in HTML
            document.getElementById('Message').textContent = "Password Match";
        } else {
            document.getElementById('Message').textContent = "Password don't match"; // Corrected 'Message.textcontext' to 'Message.textContent'
        }
    }
    console.log(pass);
});

 
 