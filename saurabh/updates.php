<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crud means create read update delete</title>
  <?php include 'links.php'   ?>
  <?php include 'connection.php'  ?>

</head>
<body>
  <div class="container register">
    <div class="row">
      <div class="col-md-3 register-left">
        <h4>Welcome Mr. Saurabh</h4>
        <p>please fill this form this form change your life definitely. </p>
        <a href="display.php">Check Form</a> <br/>
      </div>
      <div class="col-md-9 register-right">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" >
            <h4 class="register-heading">Apply for web developer post </h4>
            <form action=" " method= "POST">
                <div class="row register-form">

            <?php
                include 'connection.php';
                // $ids= $_SERVER['id'] ;
                $ids = $_GET['id'];
                // echo $ids;
                // echo "select * from jobregistration where id = {$ids}";
                $showquery = "select * from jobregistration where id = {$ids}";

                $showdata = mysqli_query($con,$showquery);
              

                $arrdata  = mysqli_fetch_array($showdata);
                // alert ($arrdata['degree']);


                if(isset($_POST['submit'])){

                    $idupdate = $_GET['id'];

                    $name=$_POST['name'];
                    $degree=$_POST['degree'];
                    $mobile=$_POST['mobile'];
                    $email=$_POST['email'];
                    $refer=$_POST['refer'];
                    $jobprofile=$_POST['jobprofile'];

                    // $insertquery = " insert into jobregistration( name,degree,mobile,email,refer,jobpost) values('$name', '$degree','$mobile', '$email', '$refer','$jobprofile')";
                    
                    $query = " update jobregistration set id= $idupdate, name ='$name',degree='$degree', mobile='$mobile',email='$email',refer='$refer',jobpost ='$jobprofile' where id=$idupdate ";
                    $result = mysqli_query($con,$query);

                    if($result){
                        ?> 
                        <script>
                            alert("data updated properly");
                        </script>
                        <?php
                    }
                    else{
                        ?>
                        <script>
                            alert("data not updated ");
                        </script>
                        <?php
                    }
                }
            ?>

                  
                
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="enter your name " name="name" value=" <?php echo $arrdata['name']; ?>" required/>
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control" placeholder="enter your mobile number " name="mobile" value="<?php echo $arrdata['mobile']; ?>" required/>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder=" any references " name="refer" value="<?php echo $arrdata['refer']; ?> " required/>
                  </div>
                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder=" enter your qualification" name=" degree" value="<?php echo $arrdata['degree']; ?> " required/>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder=" email id" name=" email" value="<?php echo $arrdata['email']; ?>" required/>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder = "WebDeveloper" name=" jobprofile " value="<?php echo $arrdata['jobpost']; ?>"/>
                  </div>
                  <input type="submit" class="btnRegister" name = "submit" value="Update"/>

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


