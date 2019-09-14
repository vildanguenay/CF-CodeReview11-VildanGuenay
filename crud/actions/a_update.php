<?php 

require '../dbconnect.php';

if ($_POST) {
    $ISBN = $_POST['ISBN'];  
    $title = $_POST['title'];
    $fauthor = $_POST['first_name'];
    $lauthor = $_POST['last_name'];
    $type = $_POST['type'];
    $descr = $_POST['description'];
    $pdate = $_POST['publish_date'];
    $pname = $_POST['pname'];
    $paddress = $_POST['paddress'];
    $psize = $_POST['psize'];
    $image = $_POST['image'];

    $id = $_POST['id'];

    // print_r($_POST);

   $updateQuery = "UPDATE medium
            INNER JOIN author on author_id = fk_author_id
            INNER JOIN publisher on publisher_id = fk_publisher_id
            SET ISBN = '$ISBN', title = '$title', first_name='$fauthor', last_name='$lauthor', type='$type', description='$descr', publish_date = '$pdate', name = '$pname', city = '$paddress', size = '$psize', image = '$image'
            WHERE medium_id = '$id'";

   if($connect->query($updateQuery) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../index.php'><button type='button'>Back To Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();
}

?>

