<?php
  ob_start();
  session_start();
  require './dbconnect.php';
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Welcome</title>
  </head>
  <body >
    <div class=row>
    <?php
        $sql = "SELECT * FROM medium";
        $result = $connect->query($sql);
        if($result->num_rows > 0) {
            while($lib = $result->fetch_assoc()) {
                echo "<div class='col-md-3 card'>
                      <img src=".$lib['image']." class='card-img-top' alt='...'>
                      <div class='card-body'>
                        <h5 class='card-title'>".$lib['title']."</h5>
                        <p class='card-text'>".$lib['description']."</p>
                      </div>
                      <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>".$lib['author']."</li>
                        <li class='list-group-item'>".$lib['type']."</li>
                        <li class='list-group-item'>".$lib['title']."</li>
                      </ul>
                      <div class='card-body'>
                        <form action='delete.php' method='GET'>
                          <input type='hidden' name='id' value='".$lib['medium_id']."' />
                          <button type='submit'>delete</button>
                        </form>
                        <form action='update.php' method='GET'>
                          <input type='hidden' name='id' value='".$lib['medium_id']."' />
                          <button type='submit'>update</button>
                        </form>
                      </div>
                  </div>";
            }
        } else  {
            echo "<tr>
                  <td colspan='5'>
                    <center>No Data Avaliable</center>
                  </td>
                </tr>";
          }
    ?>
    </div>
    <a href = "create.php" >Add Medium Here...</a>
  </body>
</html>
<?php ob_end_flush(); ?> 