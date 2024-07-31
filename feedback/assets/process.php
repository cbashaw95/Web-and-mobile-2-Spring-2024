<?php
 $visitor  = $_POST['name'];
 $vdate    = $_POST['vdate'];
 $place    = $_POST['level'];
 $rating   = $_POST['rating'];
 $destination_email = "RITISTprofessor@gmail.com,aksharasloka@gmail.com,ad4498@rit.edu";
$email_subject = "Python Quiz - ISTE240/t88";
$email_body = "Name  $name\n";
$email_body .= "Date Visited=$vdate\n";
$email_body .= "Level $level ";

$email_body .= "\nRating -> $rating\n";

$email_body .= "\n Updated 7th May 2024 \n";
mail($destination_email, $email_subject, $email_body);

?>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Feedback Form</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/nav.css">
        <script type = "text/javascript" src="js/feedbackjs.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3        /css/all.min.css" integrity="sha384-..." crossorigin="anonymous">
        <style type="text/css" id="tts-styles">[data-tts-block-id].tts-active {background: rgba(206,       225, 255, 0.9) !important;} [data-tts-sentence-id].tts-active {background: rgba(0, 89, 191, 0.7     ) !important;}</style>
    
    </head>
    <script src="./assets/js/hamburger.js"></script>
  
    
    

      
    <body>

        <div id="topbar">
            <div id="logobox">
                <div id="logowraper">
                    <a href="http://solace.ist.rit.edu/~iste240t88/modularSite/index.php" <?php if ($page === 'home') echo 'id="selected"'; ?>><img id="logo" src="images/SSLogo.webp" width="10px;" alt="Savvy Snake logo image"></a>
                </div>  
            </div>
        

    <nav>
        <!--Regular Screen Navigation Bar--> 
        <div class="top-nav">
            <ul>
                <li class="hideOnMobile"><a href="http://solace.ist.rit.edu/~iste240t88/modularSite/index.php" id="selected">Home</a></li>
                <li class="hideOnMobile"><a href="http://solace.ist.rit.edu/~iste240t88/modularSite/about/index.php" >About</a></li>
                <li class="hideOnMobile"><a href="http://solace.ist.rit.edu/~iste240t88/modularSite/history/index.php" >History</a></li>


                <li class="hideOnMobile">
                    <a id="dropdown-tab" href="#">Lessons ▼</a>
                    <ul class="dropdown">
                        <li><a href="http://solace.ist.rit.edu/~iste240t88/modularSite/basic/index.php" >Basics</a></li>
                        <li><a href="http://solace.ist.rit.edu/~iste240t88/modularSite/intermediate/index.php" >Intermediate</a></li>
                        <li><a href="http://solace.ist.rit.edu/~iste240t88/modularSite/advanced/index.php" >Advanced</a></li>
                    </ul>
                </li>

                <li class="hideOnMobile"><a href="http://solace.ist.rit.edu/~iste240t88/modularSite/blog/index.php" >Blog</a></li>
                <li class="hideOnMobile"><a href="http://solace.ist.rit.edu/~iste240t88/modularSite/quiz/index.php" >Quizzes</a></li>
                <li onclick="showSidebar()" class="menu-icon"><a><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
            </ul>
        </div>

        <!--Side Bar For Mobile Navigation-->
        <div>
            <ul class="side-bar">
                <li onclick="hideSidebar()" ><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                <li><a href="http://solace.ist.rit.edu/~iste240t88/modularSite/index.php" id="selected">Home</a></li>
                <li><a href="http://solace.ist.rit.edu/~iste240t88/modularSite/about/index.php" >About</a></li>
                <li><a href="http://solace.ist.rit.edu/~iste240t88/modularSite/history/index.php" >History</a></li>

                <li>
                    <a href="#">Lessons ▼</a>
                    <ul class="dropdown">
                        <li><a href="http://solace.ist.rit.edu/~iste240t88/modularSite/basic/index.php" >Basics</a></li>
                        <li><a href="http://solace.ist.rit.edu/~iste240t88/modularSite/intermediate/index.php" >Intermediate</a></li>
                        <li><a href="http://solace.ist.rit.edu/~iste240t88/modularSite/advanced/index.php" >Advanced</a></li>
                    </ul>
                </li>

                <li><a href="http://solace.ist.rit.edu/~iste240t88/modularSite/blog/index.php" >Blog</a></li>
                <li><a href="http://solace.ist.rit.edu/~iste240t88/modularSite/quiz/index.php" >Quizzes</a></li>
            </ul>
        </div>
    </nav>
    </div>
        
        <main>
            <div class="header">
                    <h1>Thank You</h1><br>
                    <h2> come again</h2>
            </div>
                <div class="grid-container">
                    <article class="grid-item">
                     
                        <h2>Your data has been sent <br>
                            Thank you so much for taking some time out to give your valuable feedback.<br>
                            Your input is greatly appreciated and will be taken into consideration for improving the site.
                            We hope you have a great day ahead!</h2>
                        <a id="big-link" href="http://solace.ist.rit.edu/~iste240t88/modularSite/index.php">Home</a>
                    </article>
                </div>
        </main>

          
          
                
                <footer>
                    <div class="footer-text">
                        <p>Thank you for visiting our page! </p>
                        <p>Please feel free to give us some feedback or check our image references.</p>
                    </div>
                    
                    <div class="footer-links">
                        <a href="http://people.rit.edu/ad4498/iste240/feedback/feedbackfinal.php">Feedback Form</a>
                        <a href="http://solace.ist.rit.edu/~iste240t88/modularSite/references/index.php">References</a>
                    </div>
                    
                    <?php
                        $filename = 'feedbackfinal.php';
                        if (file_exists($filename)) {
                            echo "Last modified: " . date ("l, F d, Y h:ia", filemtime($filename));
                        }
                        ?>

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
                                    src="images/html.jpg"
                                    alt="Valid HTML!" />
                            </a>
                        </p>

                   
                    
                </footer>
     </body>
</html> 