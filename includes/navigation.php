<?php 
        
    function classActive($requestUri){
        $current_file = basename($_SERVER['REQUEST_URI'], '.php');

        if($current_file == $requestUri){
            echo 'class="active"';
        }
    }

?>

<nav class="nav-container">
    <div class="content-container">

        <div class="my-logo">
            <h1>Matt Palmer</h1>
        </div>

        <div id="open-nav" class="nav-btn">
            <div class="hamburger-container">
            </div>
        </div>

        <div class="nav-content-container">

            <div class="nav-items-container">
                <ul>
                    <li><a href="index.php" <?php classActive("index");?>>Home</a></li>
                    <li><a href="#" <?php classActive("test");?>>Link 2</a></li>
                    <li><a href="#" <?php classActive("something");?>>Link 3</a></li>
                    <li><a href="about.php" <?php classActive("about");?>>About Me</a></li>
                </ul>
            </div>

            <div class="social-nav-items-container">
                <ul>
                    <li><a href="#" class="active">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                </ul>
            </div>

        </div>

    </div>
    

</nav>