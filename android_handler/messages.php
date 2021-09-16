<?php

include 'android_db_config.php';

if($_SERVER['REQUEST_METHOD']=='POST') {
    $connect = mysqli_connect($host,$database,$username,$password,$charset);
    
    $firstName = $_POST['FIRST NAME'];
    $surName = $_POST['SURNAME'];
    $middleName = $_POST['MIDDLE NAME'];
    $phoneNumber = $_POST['PHONE NUMBER'];
    $eMail = $_POST['EMAIL'];
    $textMessage = $_POST['TEXT MESSAGE'];
    $createdAt = $_POST['CREATED AT'];
    
    $query = "INSERT INTO `contact_us`(`first_name`,`surname`,`middle_name`,`phone_number`,`email`,`text_message`,`created_at`) 
          VALUES('$firstName','$surName','$middleName','$phoneNumber','$eMail','$textMessage','$createdAt')";

          if(mysqli_query($connect, $query)) {
              $result["status"] = TRUE;
              $result["remarks"] = "Saved successfully"

          } else {
              $result["status"] = FALSE;
              $result["remarks"] = "Some error occurred";

          }

          //Close connection to DB
          mysqli_close($connect);

          //Print result in JSON format
          print(json_encode($result));
}



?>