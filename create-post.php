<?php include 'db.php'?>
<?php
ini_set("display_errors",1);

$sql = "INSERT INTO posts (title,body,author) VALUES ('{$_POST['title']}','{$_POST['body']}','{$_POST['author']}')";
    
    $statement = $connection->prepare($sql);
    $statement->execute();

?>
<form action="create-post.php" method="post">
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" value=""><br><br>
  <label for="body">Body:</label><br>
  <textarea id ='body' name='body' rows='5' cols='13'></textarea><br><br>
    <label for='author'>Author:</label><br>
  <input type="text" id='author' name='author' value=""><br><br>
  <input type="submit" value="Submit">
</form> 
  
</form> 