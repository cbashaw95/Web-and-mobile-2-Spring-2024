<div id="topbar">
    <div id="logobox">
        <div id="logowraper">
            <a href="<?php echo $path; ?>index.php" <?php if ($page === 'home') echo 'id="selected"'; ?>><img id="logo" src="http://solace.ist.rit.edu/~iste240t88/modularSite/pictures/SSLogo.webp" alt="Savvy Snake logo image"></a>
        </div>  
    </div>

    <nav>
        <!--Regular Screen Navigation Bar--> 
        <div class="top-nav">
            <ul>
                <li class="hideOnMobile"><a href="<?php echo $path; ?>index.php" <?php if ($page === 'home') echo 'id="selected"'; ?>>Home</a></li>
                <li class="hideOnMobile"><a href="<?php echo $path; ?>about/index.php" <?php if ($page === 'about') echo 'id="selected"'; ?>>About</a></li>
                <li class="hideOnMobile"><a href="<?php echo $path; ?>history/index.php" <?php if ($page === 'history') echo 'id="selected"'; ?>>History</a></li>


                <li class="hideOnMobile">
                    <a id="dropdown-tab" href="#">Lessons ▼</a>
                    <ul class="dropdown">
                        <li><a href="<?php echo $path; ?>basic/index.php" <?php if ($page === 'basic') echo 'id="selected"'; ?>>Basics</a></li>
                        <li><a href="<?php echo $path; ?>intermediate/index.php" <?php if ($page === 'intermediate') echo 'id="selected"'; ?>>Intermediate</a></li>
                        <li><a href="<?php echo $path; ?>advanced/index.php" <?php if ($page === 'advanced') echo 'id="selected"'; ?>>Advanced</a></li>
                    </ul>
                </li>

                <li class="hideOnMobile"><a href="<?php echo $path; ?>blog/index.php" <?php if ($page === 'blog') echo 'id="selected"'; ?>>Blog</a></li>
                <li class="hideOnMobile"><a href="<?php echo $path; ?>quiz/index.php" <?php if ($page === 'quizzes') echo 'id="selected"'; ?>>Quizzes</a></li>
                <li onclick="showSidebar()" class="menu-icon"><a><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
            </ul>
        </div>

        <!--Side Bar For Mobile Navigation-->
        <div>
            <ul class="side-bar">
                <li onclick="hideSidebar()" ><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                <li><a href="<?php echo $path; ?>index.php" <?php if ($page === 'home') echo 'id="selected"'; ?>>Home</a></li>
                <li><a href="<?php echo $path; ?>about/index.php" <?php if ($page === 'about') echo 'id="selected"'; ?>>About</a></li>
                <li><a href="<?php echo $path; ?>history/index.php" <?php if ($page === 'history') echo 'id="selected"'; ?>>History</a></li>

                <li>
                    <a href="#">Lessons ▼</a>
                    <ul class="dropdown">
                        <li><a href="<?php echo $path; ?>basic/index.php" <?php if ($page === 'basic') echo 'id="selected"'; ?>>Basics</a></li>
                        <li><a href="<?php echo $path; ?>intermediate/index.php" <?php if ($page === 'intermediate') echo 'id="selected"'; ?>>Intermediate</a></li>
                        <li><a href="<?php echo $path; ?>advanced/index.php" <?php if ($page === 'advanced') echo 'id="selected"'; ?>>Advanced</a></li>
                    </ul>
                </li>

                <li><a href="<?php echo $path; ?>blog/index.php" <?php if ($page === 'blog') echo 'id="selected"'; ?>>Blog</a></li>
                <li><a href="<?php echo $path; ?>quiz/index.php" <?php if ($page === 'quizzes') echo 'id="selected"'; ?>>Quizzes</a></li>
            </ul>
        </div>
    </nav>
</div>
