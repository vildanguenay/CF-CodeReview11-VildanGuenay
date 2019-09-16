<?php 

require '../dbconnect.php';

if ($_POST) {
   $id = $_POST['id'];
   $sql = "DELETE FROM medium WHERE medium_id = {$id}";
    if($connect->query($sql) === TRUE) {
        //    redirect to index via http-header
      header('Location: http://localhost/CF-CodeReview11-VildanGuenay/crud/index.php');
   } else {
       echo "Error updating record : " . $connect->error;
   }
}
?>