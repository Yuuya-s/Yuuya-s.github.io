<!-- <?php
include("connect.php");

if (isset($_POST['submit'])) {
    $firstname = $_POST['first'];
    $secondname = $_POST['second'];
    $phonenumber = $_POST['PHONE'];
    $email = $_POST['email'];
    $Enterpassword = $_POST['pass'];
    $cpassword = $_POST['passw'];

    // Validate and sanitize user input

    // Check if username or email already exists
    $stmt = $conn->prepare("SELECT * FROM signup WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $firstname, $email);
    $stmt->execute();
    $stmt->store_result();
    $count_user = $stmt->num_rows;

    if ($count_user == 0) {
        if ($Enterpassword == $cpassword) {
            // Hash the password
            $hash = password_hash($Enterpassword, PASSWORD_DEFAULT);

            // Insert new user
            $stmt = $conn->prepare("INSERT INTO signup(username, email, password) VALUES(?, ?, ?)");
            $stmt->bind_param("sss", $firstname, $email, $hash);
            $result = $stmt->execute();

            if ($result) {
                header("Location: welcome.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
        }
    } else {
        if ($count_user > 0) {
            echo '<script>
                window.location.href="index.php";
                alert("Username or Email already exists!!");
            </script>';
        }
    }

    $stmt->close();
    $conn->close();
}
?> -->
<?php
include("connect.php");

if (isset($_POST['submit'])) {
    $firstname = $_POST['first'];
    $secondname = $_POST['second'];
    $phonenumber = $_POST['PHONE'];
    $email = $_POST['email'];
    $Enterpassword = $_POST['pass'];
    $cpassword = $_POST['passw'];

    
    $stmt = $conn->prepare("SELECT * FROM signup WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $firstname, $email);
    $stmt->execute();
    $stmt->store_result();
    $count_user = $stmt->num_rows;

    if ($count_user == 0) {
        if ($Enterpassword == $cpassword) {
            
            $hash = password_hash($Enterpassword, PASSWORD_DEFAULT);

            
            $stmt = $conn->prepare("INSERT INTO signup(username, email, password) VALUES(?, ?, ?)");
            $stmt->bind_param("sss", $firstname, $email, $hash);
            $result = $stmt->execute();

            if ($result) {
                header("Location: welcome.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
        }
    } else {
        if ($count_user > 0) {
            echo '<script>
                window.location.href="index.php";
                alert("Username or Email already exists!!");
            </script>';
        }
    }

    $stmt->close();
    $conn->close();
}
?>
