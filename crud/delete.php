<!DOCTYPE html>
<html>
<head>
   <title >Delete Medium</title>
</head>
   <body>
      <h3>Do you really want to delete this medium?</h3>
      <form action ="actions/a_delete.php" method="post">
      <!-- save medium id in value attribute for db -->
         <input type="hidden" name= "id" value="<?php echo $_GET['id'] ?>"/>
         <button type="submit">Yes, delete it!</button >
         <a href="index.php"><button type="button">No, go back!</button></a>
      </form>
   </body>
</html>