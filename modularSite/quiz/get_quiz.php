<?php
	$page='quizzes';
	$path='../';
	require ($path.'assets/inc/header.php');
?>

<?php
	include($path.'assets/inc/nav.php');
?>	

<?php
// Created to provide many exams
// Demo 3 different exams  - Fishing, C+, Java

    session_name("Savvy Serpent");
	session_start();
	$path = "../";
	$examID = $_GET['examID'];
    $calledURL = basename($_SERVER['REQUEST_URI']);
	require $path.'../pinclude/dbConnect.inc'; 
	
	$sql="SELECT * FROM quiz WHERE examID = '$examID';";

//     if ((isset($_POST["1Option"])) ||  (isset($_POST["4Option"]))) { //
    $result = mysqli_query($mysqli, $sql);

    $quiz_id = 0;

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            $quizName = $row['heading'];   
            
            echo '<div class="header">
                    <h1>'.$quizName.'</h1><br>
                    <h2>Take the '. $quizName . ' here and test what you have learned!</h2>
                </div><div class="lineAnimation"></div>';
            $_SESSION['quiz']= $quizName;
            //  echo '<h1>' . $_SESSION['quiz'] . '</h1>';
        } //end of while
    
    if (isset($_POST["submitted"]))  {
        // Come back and want to grade quiz
        $grade = true;
        echo '<h4 style="color:#F0F0F0;background:#588157;margin:1.5em;padding:1.5em">' . 'Correct Answers Appear'.'</h4>'; 
    }
    else {
        $grade = false;
    
    }//end of if
        //  echo "<h2>"  . $calledURL . "</h2>"; // testing variable $calledURL
?>

<!-- <form action = "get_quiz2.php?examID=1" method = "POST"> --> 

<form action = "<?php echo $calledURL; ?>"   method = "POST">  

<?php
        $sqlQ ="SELECT * FROM questions WHERE examID = '$examID';";

        $resultQ = mysqli_query($mysqli, $sqlQ);
        
        $count = 1;

        if (mysqli_num_rows($resultQ) > 0) {
            while($rowQ = mysqli_fetch_array($resultQ)) {
                $question = $rowQ['question'];
                $questionID = $rowQ['questionID'];
                
                echo '<section class="questions"><h2 style="display: inline-block;">'. $count . ". " .$question.'</h2><br/>';
                
                
                $count++;
                
                $sqlOptions ="SELECT * FROM multipleChoiceOptions WHERE questionID = '$questionID';";

                $resultOptions = mysqli_query($mysqli, $sqlOptions);


                if (mysqli_num_rows($resultOptions) > 0) {
                    $optionCount = 1;
                    while($rowOptions = mysqli_fetch_array($resultOptions)) {
                        $option = $rowOptions['mcOption'];
                        $c  = $rowOptions['isCorrect'];
                        echo '<br/><input name="'.$questionID.'Option"  value="'.$c.'" type="radio"/>'
                        .$optionCount.') <label';
                        if($grade && $c == 1 ){
                            echo ' style="font-weight:bold;color:#F0F0F0;background:#588157"';
                        }
                        echo '>'. $option.'</label>';
                        $optionCount++;
                    } //end of while
                    
                    echo "<p>&nbsp;</p>";
                } // end of getting options
                echo "</section>";
            } //end of while
            
        
            
            
            
        }// end of getting question
		
	} // end of getting quiz

?>
    
     		<div id="button">
			<input type = "submit"  name="submitted" value="SUBMIT" style='font-weight:bold;color:#F0F0F0;
                background:#588157;border-style:none;border-radius:10px;margin-bottom:1.5em'>
		</div><!-- end of div for submit button -->   
</form>

<?php
    require($path.'assets/inc/footer.php');
     mysqli_close($mysqli);

?>

