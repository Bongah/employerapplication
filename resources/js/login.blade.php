@extends()
<?php
    require('functions.php');
    // When form submitted, check and create user session.
    session_start();
    if (isset($_POST['name'])) {
        $name = stripslashes($_REQUEST['name']);    // removes backslashes
       
        $password = stripslashes($_REQUEST['password']);
       
        // Check user is exist in the database
        $result=$database->validate_user($name, $password);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['name'] = $name;
            // Redirect to user dashboard page
            header("Location: index.php");
        } else {

            $_SESSION['message'] = " Incorrect Username or Password try again!";
            $_SESSION['msg_type'] = 'danger';
            header ("location:login.php");
            // echo "<div class='form'>
            //       <h3>Incorrect Username/password.</h3><br/>
            //       <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
            //       </div>";
        }
    } else {
?>
   <div class="center">
   
        <h2 class="text-center"> login</h2>
        <?php 
            if(isset($_SESSION['message'])){
        ?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>">

            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);

            ?>
        </div>
        <?php } ?>    
                    
        <form method="post" name="login">
            <div class="containerr">
                <label for="uname"><b>Username</b></label>
                <input type="text"  name="name" placeholder="Enter Username" required/>
                            
                <label for="psw"><b>Password</b></label>           
                <input type="password"  name="password" placeholder="Enter Password" required/>
                
                <button type="submit" name="submit" >Login</button>
                <!-- <input type="submit" value="Login" name="submit" class="btn btn-primary"/> -->
            
                <label ><a href="signup.php">New Registration</a></label>
            </div>
            
        </form>
    </div>                
<?php
    }
?>