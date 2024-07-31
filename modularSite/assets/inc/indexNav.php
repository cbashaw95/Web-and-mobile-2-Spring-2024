<div id="topbar">
    <div id="logobox">
        <div id="logowraper">
            <img id="logo" src="https://solace.ist.rit.edu/~iste240t88/modularSite/pictures/SSLogo.webp" alt="Savvy Snake logo image">
        </div>  
    </div>


    <nav>
        <a href="<?php echo $path; ?>index.php" <?php if ($page === 'home') echo 'id="selected"'; ?>>Home</a>
        <a href="<?php echo $path; ?>about/index.php" <?php if ($page === 'about') echo 'id="selected"'; ?>>About</a>
        <a href="<?php echo $path; ?>history/index.php" <?php if ($page === 'history') echo 'id="selected"'; ?>>History</a>

        <div class="dropdown">
            <a class="navbar dropdown-toggle" href="#">Lessons ▼</a>
            <div class="dropdown-content">
                <a href="<?php echo $path; ?>basic/index.php" <?php if ($page === 'basic') echo 'id="selected"'; ?>>Basics</a>
                <a href="<?php echo $path; ?>intermediate/index.php" <?php if ($page === 'intermediate') echo 'id="selected"'; ?>>Intermediate</a>
                <a href="<?php echo $path; ?>advanced/index.php" <?php if ($page === 'advanced') echo 'id="selected"'; ?>>Advanced</a>
            </div>
        </div>

        <a href="<?php echo $path; ?>blog.php" <?php if ($page === 'blog') echo 'id="selected"'; ?>>Blog</a>

        <a href="<?php echo $path; ?>quiz/index.php" <?php if ($page === 'quizzes') echo 'id="selected"'; ?>>Quizzes</a>

        <a href="<?php echo $path; ?>references/index.php" <?php if ($page === 'references') echo 'id="selected"'; ?>>References</a>
    </nav>
</div>
