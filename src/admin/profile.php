<?php
include "navbar.php";
include "link.php";

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Profile</title>

  </head>
   <body>

     </section>

     <!--.............................................profile page.................................-->
     <section id="card" style="min-height:500px;font-size:18px;">
      <div class="row my-5 row justify-content-center">
      <div class="col-lg-6 col-md-6 col-sm-4 m-2">
        <div class="card">
          <div class="card-body">

          <?php


            //..................................Php Added..................
            $sql="select * from admin where username='$_SESSION[admin_login_user]';";
            $result=mysqli_query($dblink,$sql);

            $row=mysqli_fetch_assoc($result);
            ?>



            <h3 class="text-dark display-5 pl-4">Welcome to <?php  echo $_SESSION['admin_login_user'];?>  profile </h3>

            <ul class="list-group">
                <li class="list-group-item inline-block input-group ">
                  <span> <i class="fa fa-address-card mr-5 d-inline-block " style=""><?php echo "&nbsp Full Name  ";?></i></span>
                  <span class="d-inline-block "><h5 class="display-5 ml-4"><?php echo $row['f_name'].' '.$row['l_name'];?></h5></span>
                </li>

                <li class="list-group-item inline-block input-group ">
                  <span> <i class="fa fa-user mr-5 d-inline-block " style=""><?php echo "&nbsp Username ";?></i></span>
                  <span class="d-inline-block "><h5 class="display-5 ml-4"><?php echo $row["username"];?></h5></span>
                </li>

                <li class="list-group-item inline-block input-group ">
                  <span> <i class="fa fa-envelope mr-5 d-inline-block " style=""><?php echo "&nbsp Email ";?></i></span>
                  <span class="d-inline-block "><h5 class="display-5 ml-5"><?php echo $row["email"];?></h5></span>
                </li>

                <li class="list-group-item inline-block input-group ">
                  <span> <i class="fa fa-phone mr-5 d-inline-block " style=""><?php echo "&nbsp Contract";?></i></span>
                  <span class="d-inline-block "><h5 class="display-5 ml-5"><?php echo $row["contract"];?></h5></span>
                </li>

                 <li class="list-group-item inline-block input-group ">
                   <span> <i class="fa fa-key mr-5 d-inline-block " style=""><?php echo "&nbsp Password";?></i></span>
                   <span class="d-inline-block "><h5 class="display-5 ml-5"><?php echo $row["password"];?></h5></span>
                 </li>


              </ul>
              <div class="change_password">
             <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary mx-5 my-3" data-toggle="modal" data-target="#exampleModal" name="cpass">
   Change Password
  </button>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Change your password</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
          <div class="jumbotron">
            <form class="" action="profile.php" method="post">


  <label>Old password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
  <input type="password" name="old_pass" value=""><br>
  <label>New password &nbsp&nbsp&nbsp&nbsp </label>
  <input type="password" name="new_pass" value=""><br>
  <label>Confirm password</label>
  <input type="password" name="con_pass" value=""><br>
  <input  class="btn btn-primary mt-3" type="submit" name="submit_pass" value="Submit"/>
  </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

            </div>
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

   </body>
 </html>
 <?php
 $sql="select * from admin where username='$_SESSION[admin_login_user]';";
 $result=mysqli_query($dblink,$sql);
 $row=mysqli_fetch_assoc($result);
 if(isset($_POST["submit_pass"])){?>
   <script type="text/javascript">
   alert("Update successfully");
   </script>
   <?php

   $pass1=$_POST['old_pass'];
   $pass2=$_POST['new_pass'];
   $pass3=$_POST['con_pass'];
   $old2=$row["password"];
   $user=$_SESSION['admin_login_user'];
   if($old2==$pass1)
   {
     if($pass2==$pass3)
     {
       $sql = "UPDATE `admin` SET `password`='$pass2' WHERE username ='$user';";
       $query = mysqli_query($dblink, $sql);?>
       <script type="text/javascript">
       alert("Update successfully");
       </script>

     <?php
   }
   else{?>
     <script type="text/javascript">
     alert("new password and confirn password isnot match");
     </script>

  <?php }
   }
   else{?>
     <script type="text/javascript">
     alert("Donot match old password");
     </script>
   <?php
 }

 }
 ?>
