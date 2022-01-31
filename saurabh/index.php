<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crud means create read update delete</title>
  <?php include 'links.php' ?>

</head>
<body>
  <div class="container register">
    <div class="row">
      <div class="col-md-3 register-left">
        <h4>Wecome Mr. Saurabh</h4>
        <p>please fill this form this form change your life definitely. </p>
        <a href="display.php">Check Form</a> <br/>
      </div>
      <div class="col-md-9 register-right">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" >
            <h4 class="register-heading">Apply for web developer post </h4>
            <form action=" " method= "POST">
              <div class="row register-form">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="enter your name " name="user" value=" enter your name " required/>
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control" placeholder="enter your mobile number " name="mobile" value="enter your mobile number " required/>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder=" any references " name="refer" value="Any references " required/>
                  </div>
                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder=" enter your qualification" name=" degree" value="enter your qualification " required/>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder=" email id" name=" email" value="" required/>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder=" WebDeveloper post" name=" jobprofile" value="Web Developer"/>
                  </div>
                  <input type="submit" class="btnRegister" name="submit" value="Register"/>

                </div>
              </div>
            </form>
              

          </div>
        </div>

      </div>
    </div>
  </div>
</body>
</html>


<?php
include 'connection.php';

if(isset($_POST['submit']))
{
  $name=$_POST['user'];
  $degree=$_POST['degree'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $refer=$_POST['refer'];
  $jobprofile=$_POST['jobprofile'];

  $insertquery = " insert into jobregistration( name,degree,mobile,email,refer,jobpost) values('$name', '$degree',
   '$mobile', '$email', '$refer','$jobprofile')";

   $result = mysqli_query($con,$insertquery);

   if($result){
     ?>
     <script>
       alert("data inserted properly");
     </script>
     <?php
   }
   else
    {
      ?>
      <script>
        alert("data not inserted ");
      </script>
      <?php
    }
}
?>






