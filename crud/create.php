<!DOCTYPE html>
<html>
<head>
   <title >PHP CRUD  |  Add Medium</title>

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

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
            <tr>
               <th>ISBN</th>
               <td><input  type="text" name="ISBN"  placeholder="ISBN" /></td>
           </tr>
           <tr>
               <th>Title</th>
               <td><input  type="text" name="title"  placeholder="title" /></td>
           </tr>    
           <tr>
               <th>Author</th>
               <td><input  type="text" name= "first_name" placeholder="first_name"/></td>
               <td><input  type="text" name= "last_name" placeholder="last_name"/></td>
           </tr>
           <tr>
               <th>Type</th>
               <td><input  type="text" name="type"  placeholder="type" /></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input  type="text" name="description"  placeholder="description" /></td>
           </tr>
           <tr>
               <th>Publish Date</th>
               <td><input type="text"  name="publish_date" placeholder ="Publish Date"/></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input type="text"  name="pname" placeholder ="name"/></td>
               <td><input  type="text" name= "paddress" placeholder="address"/></td>
               <td><input  type="text" name= "psize" placeholder="size"/></td>
           </tr>
           <tr>
               <th>Image</th>
               <td><input type="text"  name="image" placeholder ="image"/></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert Medium</button></td>
               <td><a href= "index.php"><button type="button">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>