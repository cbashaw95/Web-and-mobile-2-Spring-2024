<footer>

<?php
         $sql = "SELECT myCounter FROM counter where ID = 1";
         $res = mysqli_query($mysqli, $sql);
         $row = mysqli_fetch_row($res);
         $count = $row[0];
    
         $count++;
      
         $stmt = $mysqli->prepare("UPDATE counter SET myCounter = ? WHERE ID = 1 LIMIT 2");
         $stmt -> bind_param('i', $count);
         $stmt -> execute();   

      //   $stmt->close();

?>

<div class="footer-text">
        <p>Thank you for visiting our page! </p>
        <p>Please feel free to give us some feedback or check our image referances.</p>
    </div>

    <div class="footer-links">
        <a href="http://people.rit.edu/ad4498/iste240/feedback/feedbackfinal.php">Feedback Form</a>
        <a href="http://solace.ist.rit.edu/~iste240t88/modularSite/references/index.php">References</a>
    </div>


    <div class="myCounter">
        <p>Site Viewed <?php echo $count; ?> times!</p>
        <?php
            $filename = 'index.php';
            if (file_exists($filename)) {
                echo "Last modified: " . date ("l, F d, Y h:ia", filemtime($filename));
            }
        ?>
    </div>

        <p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</p>
<p>
    <a href="https://validator.w3.org/nu/">
        <img style="border:0;width:88px;height:31px"
            src='http://solace.ist.rit.edu/~iste240t88/modularSite/pictures/html.jpg'
            alt="Valid HTML!" />
    </a>
</p>
</footer>
