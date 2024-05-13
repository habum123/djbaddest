<?php 

include('config.php');


if(isset($_POST['addEmail'])) {
    $email = $_POST['email'];


    $sql = "INSERT INTO followers(email) VALUES('$email')";
    $run = mysqli_query($conn, $sql);

    if($run) {
        echo "
            <script>
                window.location.href = 'mixes.php';

            </script>
        
        ";
    } else {

        echo "
        
            <script>
                alert('Error with inserting your email, please try again!')
                window.location.href = 'index.php'; 
            </script>
        
        ";
    }


}


?>