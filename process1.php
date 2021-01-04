<?php>

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        echo "Email: " .$email ."<br/>";
        $password = $_POST['pw'];
        echo "Password: " .$password . "<br/>";
    }


?>