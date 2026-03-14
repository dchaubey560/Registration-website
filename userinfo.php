<?php
    // Connects to the database (assuming 'root' user and no password)
    $con = mysqli_connect('localhost','root'); 

    if($con){
        echo "Conenction"; // 'Connection Success' message is truncated
    }else{
        echo "No connection"; // 'No connection' message is truncated
    }

    // Selects the database (name is missing/truncated in $c variable)
    mysqli_select_db($con,'youtubeuserdata'); 

    // Collects data posted from a form
    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comments = $_POST['comments'];
        // Step 4: Construct the SQL INSERT query
    // This query inserts the collected data into the 'userinfodata' table
    $query = "INSERT INTO userinfodata (user, email, mobile, comment) 
              VALUES ('$user', '$email', '$mobile', '$comments')";
  echo "$query";
    // Step 5: Execute the query
    mysqli_query($con, $query);
     // Step 6: Redirect the user back to the index page after submission
 header('location:index.php');
?>