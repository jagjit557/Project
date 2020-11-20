 <?php
  
  $conn = mysqli_connect("localhost", "jagjit", "", "database") or die(mysqli_error($conn));
    
    if(!isset($_SESSION)){
        session_start();
    }

    // get details
    
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    
    $hashed_password = md5($password);
    $query1 = "SELECT id FROM users WHERE email = '$email' AND password = '$hashed_password'";
    $query1 = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', $lastname, '$email', '$hashed_password')";

    // check if already registered user
    $result = mysqli_query($conn, $query1);
    if(mysqli_num_rows($result) > 0){
        // email already exists
        echo "Email id already exists. Try another";
    }else{
        // perform query operation
        $result = mysqli_query($conn, $query2);
        $_SESSION["email_id"] = $email;
        $_SESSION["id"] = mysqli_insert_id($conn);

       
        header("location: login.php");
    }
?>
