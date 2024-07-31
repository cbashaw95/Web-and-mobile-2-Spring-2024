<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <script type = "text/javascript" src="assets/js/feedbackjs.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3        /css/all.min.css" integrity="sha384-..." crossorigin="anonymous">
    <style type="text/css" id="tts-styles">[data-tts-block-id].tts-active {background: rgba(206,       225, 255, 0.9) !important;} [data-tts-sentence-id].tts-active {background: rgba(0, 89, 191, 0.7     ) !important;}</style>

</head>


        
<body>

    <div id="topbar">
        <div id="logobox">
            <div id="logowraper">
               <a href="http://solace.ist.rit.edu/~iste240t88/modularSite/index.php" ><img id="logo" src="assets/images/SSLogo.webp" alt="Savvy Snake logo image"></a>
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
    <div class="header">
        <h1>Feedback Form</h1><br>
      
    </div>

    <div class="grid-container">
        <article class="grid-item">
 
        <div class="main">
        
            <form action="assets/process.php" method="POST" onsubmit="return validateForm();" >
                <div id="headingquestion">
                    <h2 class = "underline"> <!-- add bottom border to this -->
                        Please tell us how you liked the site
                    </h2>
                </div>
        
                <hr>
    
                <!-- For name-->
                 Enter your name
                 <input type ="text" id="name" name ="name"
                           placeholder="Required Entry" >
                 <span class="astric"> * </span>
        
        
        
                <!-- Date documenting when they visited the site -->
                    When did you visit the site?
                    <input type = "date" id="visitDate" name = "vdate" >
                    <span class="astric"> * </span><br>
                    <p id="errorMessage"></p>
        
        
              
                <fieldset>
                <legend>Which level did you begin with? - Must Select one</legend>
                <input type="radio" name="level" value="beginner" id="b"><label for="b">Beginner</label><br>
                <input type="radio" name="level" value="intermediate" id="i"><label for = "i">Intermediate</label><br>
                <input type="radio" name="level" value="Advanced"  id="wp" ><label for ="wp">Advanced</label><br>
                &nbsp;&nbsp;
         
                </fieldset>
        
                <br>
    
                <!-- Favourite Topic (checkbox)-->
                <fieldset>
                <legend> Favourite topics? - Select all that apply</legend>
                <input type="checkbox" name="topic[]" value="Objects" id="objects"><label for="objects">Objects,classes</label>
                <input type="checkbox" name="topic[]" value="thread" id="thread"><label for="thread">Multithreading</label>
                <input type="checkbox" name="topic[]" value="casting" id="casting"><label for="casting">Casting</label>
                <input onclick="otherplaces();" type="checkbox" name="level" value="User_Entered" id="other">
                <label for ="other" >Other</label>
                &nbsp;&nbsp;
                <input  name="SOMETOPIC" placeholder="Enter topic" type="text"
                id="SOMETOPIC" size="60" onMouseOut="getOther();" > <br>
                </fieldset>
                
        
                <!-- Scrollbar for town raiting -->
                <br>Please rate our site<br>
                <p>0
                <input type="range" name="rating" min="0" max="10" step="1" list="set">
                <datalist id = "set">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                </datalist>
                10</p>
        
        
                <div id="button">
                    <input type = "submit" VALUE="Send Email" >
                    <input type = "reset" VALUE= "Clear Input Fields">
                </div><!-- end of div for submit button -->
        </form>
        </div>
        </article>
    </div>

   

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
                src="assets/images/html.jpg"
                alt="Valid HTML!" />
        </a>
    </p>


    </footer>


        
</body>
</html>