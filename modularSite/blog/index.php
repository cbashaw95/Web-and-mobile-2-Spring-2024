<?php
	$page='blog';
	$path='../';
	require ($path.'assets/inc/header.php');
?>

<?php
	include($path.'assets/inc/nav.php');
?>

<?php

require $path."../pinclude/dbConnect.inc";

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);          
    $data = htmlspecialchars($data);  
    return $data;
  }


if ($mysqli) {
  if (!empty($_POST['name']) && !empty($_POST['post']) && !empty($_POST['title'])) {
            /*
                we are using client entered data - therefore we HAVE TO USE a prepared statement
                1)prepare my query
                2)bind
                3)execute
                4)close
             */     
    $stmt=$mysqli->prepare("INSERT INTO blogs (name, post, title) VALUES (?, ?, ?)");

    $name = test_input($_POST['name']);
    $post = test_input($_POST['post']);
    $title = test_input($_POST['title']);

    $stmt->bind_param("sss",$name, $post, $title);
    $stmt->execute();
    $stmt->close(); //  }//end of if to make sure data is sent using $_POST
  }//end of not empty if

 //get contents of table and send back...
    $sql = 'SELECT name, post, date, title, id FROM blogs';
    $res=$mysqli->query($sql);
    if($res){
      while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){ // $rowHolder['name'] $rowHolder['post']
        $records[] = $rowHolder; // $records[3]['name']['post']
      }
      //var_dump($records); //Used to debug your while loop. Display the database table posts 
    }
  }
?>

<?php

require $path.'../pinclude/dbConnect.inc';           
		$sql = "SELECT content FROM modularSite where page='$page'";
		$result = $mysqli->query($sql);

		if($result->num_rows > 0){
			//output the data for each row
			while ($row = $result->FETCH_ASSOC()) {
				echo $row['content'];
			}
		}else{
			echo "0 results, did something wrong!";
		}
?>

<div class="blog-display">

    <?php foreach ($records as $record): ?>
        <div class="blog-post">
            <h2 class="post-title"><?php echo htmlspecialchars($record['title']); ?></h2>
            <p class="post-author">Author: <?php echo htmlspecialchars($record['name']); ?></p>
            <p class="post-date">Date: <?php echo $record['date']; ?></p>
            <p class="post-id">id: <?php echo $record['id']; ?></p>

            <div class="post-content">
                <p>&emsp;<?php echo htmlspecialchars($record['post']); ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php
    require($path.'assets/inc/footer.php');
     mysqli_close($mysqli);
?>