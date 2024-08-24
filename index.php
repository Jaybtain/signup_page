

<?php
$connection = mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($connection,"ff");?>

<html lang="en">
    <head>
        <title>Sign up or Register  with  a diffs</title>
        <link rel="stylesheet" href="css/style.css">
    </head>



        <body class="bg">
        <div class="start">


            <h1 class="h1c">SIGN UP OR REGISTRATION</h1>
            <form action="#" method="post">

                    FIRST NAME: <input type="text" class="textbox" name="fname" placeholder="Enter first Name"><br><br>
                    LAST NAME: <input type="text" class="textbox" name="lname" placeholder="Enter last Name"><br><br>
                    EMAIL:     <input type="email" class="textbox" name="email" placeholder="Enter Email id"><br><br>
                    PASSWORD:   <input type="password" class="textbox" name="password" placeholder="password"><br><br>
                    CONFIRM PASSWORD: <input type="password" class="textbox" name="cpassword" placeholder="confirm password"><br><br>


                   <input type="submit" name="login" class="btn">

            </form>

        </div>


        </body>


</html>

            <?php



            if(isset($_POST['login'])){
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];
                if($password == $cpassword)
                {
                    $query = "INSERT INTO users (fname, lname, email, password,cpassword) VALUES ('$fname', '$lname', '$email', '$password','$cpassword')";

                    $query_run = mysqli_query($connection, $query);
                    if($query_run){
                        echo '<script type="text/javascript">alert("Registration Successful");</script>';
                    }
                    else{
                        echo '<script type="text/javascript">alert("Registrations Failed");</script>';
                    }





                }else{
                    echo '<script type="text/javascript">alert("Password and Confirms Password not matched") </script>';
                }


            }

            ?>






