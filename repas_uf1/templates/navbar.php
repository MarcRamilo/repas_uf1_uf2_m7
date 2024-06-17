<nav class="py-3 px-2 bg-secondary text-white h4 d-flex justify-content-between">
    <div class="left">
        <i class="bi bi-android2"> Institut Cirviànum</i>
    </div>
    <div class="right ">
  
        <?php if(!isset($_SESSION['user_logged'])){ ?>
        <a href="./signup.php" class="text-white text-decoration-none">SignUp</a>
        <a href="./login.php" class="text-white text-decoration-none">Login</a>
        <?php 
        }else{ ?>

        <a href="./logout.php" class="text-white text-decoration-none">LogOut</a>
        <a href="./welcome.php" class="text-white text-decoration-none"><?php echo $_SESSION['user_logged']['username'] ?></a>
        <a href="./blog.php" class="text-white text-decoration-none">Blog</a>


        <?php 
        }
        
         ?>
         <a href="./index.php" class="text-white text-decoration-none">Reset</a>
    </div>
</nav>