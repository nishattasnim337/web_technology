<?php
include "navbar.php";
include "link.php";
 ?>
 <!DOCTYPE html>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Add student</title>
   </head>
   <body>
     <section>
     <div class="container">
       <div class="row">
         <div class="col-md-3">

         </div>
         <div class="col-md-6 text-center">
           <h1 class="font-weight-bold text-center py-5" >Add Student</h1>
           <form action="" method="post">
             <input type="text" class="form-control" name="f_name" placeholder="First name" required/><br>
             <input type="text" class="form-control" name="l_name" placeholder="Last name" required/><br>
            <select  class="form-control" name="department">
   					<option value="CSTE">CSTE</option>
   					<option value="IIT" selected>IIT</option>
   					<option value="ACCE">ACCE</option>
   					<option value="EEE">EEE</option>
   					<option value="ICE">ICE</option>
   					<option value="Math">Math</option>
   					<option value="Pharmacy">Pharmacy</option>
   					<option value="Microbiology">Microbiology</option>
   					<option value="BGE">BGE</option>
   					<option value="English">English</option>
   					<option value="LAW">LAW</option>
          </select><br>
            <select name="session" class="form-control" id="">
              <option value="1st">2017-18</option>
              <<option value="2nd">2018-19</option>
              <option value="3rd">2019-20</option>
              <option value="4th">2020-21</option>
            </select><br>
            <input type="text" name="roll" class="form-control" placeholder="Enter your roll no" required/><br>
            <input type="text" class="form-control" name="username" placeholder="Username"></input><br>
            <input type="email" class="form-control"  placeholder="Enter your Edu mail" name="email"required/><br>
            <div class=" row">
            <input type="password"   placeholder="Eneter password" class="form-control col-md-5 ml-3" name="pass" required>
            <input type="password"  placeholder="Retype password" class="form-control col-md-6 ml-3" name="re_pass" required>

          </div><br>
          <input type="password" class="form-control" placeholder="Contract" name="contract"><br>
          <input type="submit" class="btn-primary form-control" name="submit">

           </form>
         </div>
         <div class="col-md-3"></div>
       </div>
     </div>
  </section>
   </body>
 </html>
