<?php

include "navbar.php";
include "link.php";
//session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icon1.png">
</head>
<body>

<!--Index home section-->

<section id="loginsection" class="my-0">
  <div class="darkoverlay">
    <div class="container">
      <div class="row text-center text-light py-5 d-flex justify-content-center">
        <div class="col">
          <div class="loginbox ">
            <h1 class="display-5 py-3 ">User Login Form</h1>
            <form action="" method="POST"  action="" class=" form px-5 mx-5 pt-5">
              <input type="text" class="form-control lead" name="username" placeholder="Username or email" required=""><br>
              <input type="password" class="form-control" name="password" placeholder="Password" required=""><br>


              <button class="btn btn-primary" name="submit">Login</button>
            </form>
            <div class="row pt-3 pl-5 ml-5 ">
              <div class="center-block">
              
                        <!--php .....-->
                        <?php
                        if(isset($_POST['submit2']))
                        {
                          ?>
                          <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

                        <?php
                      }
                      else{

                          }

                         ?>

                    </div>

                    </form>


                    </div>
                  </div>
                </div>
              </div>
              <div class="center-block">
              <p class="pb-5  class="font-weight-bold">
                New in Our site?
                <a href="registration.php" class=""> Sign Up</a>
              </p>
            </div>
            </div>


            </div>



          </div>
          <?php

          if(isset($_POST['submit']))
          {
          $count=0;
          $sql="SELECT * from admin where username='$_POST[username]'|| email='$_POST[username]' && password ='$_POST[password]'";
          $result=mysqli_query($dblink,$sql);
          //$row=mysqli_fetch_assoc($result);

            $count=mysqli_num_rows($result);
            if($count==0)
            {
              ?>
               <script type="text/javascript">
             window.alert("The Username and Password doesn't match.Please try again")
               </script>


                <!--  <div class="alert alert-warning align-center mx-5" style="width:600px;
                  background-color:red; color:white;">
                  <strong>The Username and Password doesn't match.</strong>
                </div>-->


              <?php


            }
            else{?><?php

              $sql="SELECT * from admin where username='$_POST[username]'|| email='$_POST[username]' && password ='$_POST[password]'";
              $result=mysqli_query($dblink,$sql);
              $res=mysqli_fetch_assoc($result);
              //$_SESSION['login_user']=$result;

             $_SESSION['admin_login_user']= $res['username'];
             $_SESSION['pic']=$res['pic'];

              ?>
              <script type="text/javascript">
              alert("Successfully Login");
              window.location="books.php";
              </script>
              <?php


            }

          }

          ?>
        </div>

      </div>
    </div>
  </div>
  </section>


<footer class="bg-dark text-light text-center">
  <div class="container">
    <div class="row">
      <div class="col">
        <p>Copyright 2021 &copy; library</p>
      </div>
    </div>
  </div>
</footer>

  <!-- JS FILES -->
    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
