<?php 

require './dbconnect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = " SELECT *
            FROM medium
            INNER JOIN author on author_id = fk_author_id
            INNER JOIN publisher on publisher_id = fk_publisher_id
            WHERE medium_id = {$id}";
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();
   $connect->close();
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>PHP CRUD  |  Add Medium</title>

   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset >
   <legend>Add Medium</legend>

   <form action="actions/a_update.php" method="post">
       <table cellspacing= "0" cellpadding="0">
            <tr>
               <td><input type="hidden" name="id" value="<?php echo $data['medium_id']?>"/></td>
           </tr>
            <tr>
               <th>ISBN</th>
               <td><input type="text" name="ISBN" value="<?php echo $data['ISBN']?>" placeholder="ISBN"/></td>
           </tr>
           <tr>
               <th>Title</th>
               <td><input type="text" name="title" value="<?php echo $data['title']?>" placeholder="title"/></td>
           </tr>    
           <tr>
               <th>Author</th>
               <td><input type="text" name= "first_name" value="<?php echo $data['first_name']?>" placeholder="first_name"/></td>
               <td><input type="text" name= "last_name" value="<?php echo $data['last_name']?>" placeholder="last_name"/></td>
           </tr>
           <tr>
               <th>Type</th>
               <td><input type="text" name="type" value="<?php echo $data['type']?>" placeholder="type"/></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input type="text" name="description" value="<?php echo $data['description']?>" placeholder="description"/></td>
           </tr>
           <tr>
               <th>Publish Date</th>
               <td><input type="text" name="publish_date" value="<?php echo $data['publish_date']?>" placeholder ="Publish Date"/></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input type="text" name="pname" value="<?php echo $data['name']?>" placeholder ="name"/></td>
               <td><input type="text" name= "paddress" value="<?php echo $data['city']?>" placeholder="City"/></td>
               <td><input type="text" name= "psize" value="<?php echo $data['size']?>" placeholder="size"/></td>
           </tr>
           <tr>
               <th>Image</th>
               <td><input type="text" name="image" value="<?php echo $data['image']?>" placeholder ="image"/></td>
           </tr>
           <tr>
               <td><button type ="submit">Update Medium</button></td>
               <td><a href= "index.php"><button type="button">Back</button></a></td>
           </tr>
       </table>
   </form>

</fieldset>

</body>
</html>