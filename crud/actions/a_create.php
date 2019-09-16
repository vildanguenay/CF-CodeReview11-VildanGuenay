<?php 

require '../dbconnect.php';

if ($_POST) {
   $ISBN = $_POST[ 'ISBN'];  
   $title = $_POST['title'];
   $fauthor = $_POST['first_name'];
   $lauthor = $_POST['last_name'];
   $type = $_POST[ 'type'];
   $descr = $_POST[ 'description'];
   $pdate = $_POST['publish_date'];
   $pname = $_POST['pname'];
   $paddress = $_POST['paddress'];
   $psize = $_POST['psize'];
   $image = $_POST['image'];

//    save input inside authorQuery
   $authorQuery = "INSERT INTO author (first_name, last_name) VALUES ('$fauthor', '$lauthor')";
//    send input to db
   $connect->query($authorQuery);
//    connect to db and get id of last(!) insert bc of foreign key
   $authorId = $connect->insert_id;
   print_r('Author Result: '.$authorResult);
   print_r('Author Id: '.$authorId);

   $publisherQuery = "INSERT INTO publisher (name, city, size) VALUES ('$pname', '$paddress', '$psize')";
   $connect->query($publisherQuery);
   $publisherId = $connect->insert_id;

   $mediumQuery = "INSERT INTO medium (ISBN, title, fk_author_id, type, description, publish_date, fk_publisher_id, image) 
   VALUES ('$ISBN', '$title', '$authorId', '$type', '$descr', '$pdate', '$publisherId', '$image')";
   if ($connect->query($mediumQuery) === FALSE) {
       print_r($connect->error_get_last());
    }
    //    redirect to index via http-header
    header('Location: http://localhost/CF-CodeReview11-VildanGuenay/crud/index.php');
}
?>