<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
        <?php include 'links.php'; ?>
       
</head>
<body>

<div class="main-div">
    <h1>List of candidates for web developer job</h1>

    <div class="center-div">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>degree</th>
                        <th>mobile</th>
                        <th>email</th>
                        <th>refer</th>
                        <th>post</th>
                        <th colspan="2">operation</th>
                    </tr>
                </thead>
                <?php

                include 'connection.php';

                $selectquery = " select * from jobregistration ";

                $query = mysqli_query($con,$selectquery);

                $nums = mysqli_num_rows($query);

                while($result =  mysqli_fetch_array($query)){
                ?>   
                
                <tr>
                    <td><?php echo $result['id']; ?> </td>
                    <td><?php echo $result['name']; ?> </td>
                    <td><?php echo $result['degree']; ?> </td>
                    <td><?php echo $result['mobile']; ?> </td>
                    <td><span class="email-style"> <?php echo $result['email']; ?> </span> </td>
                    <td><?php echo $result['refer']; ?> </td>
                    <td><?php echo $result['jobpost']; ?> </td>
                    <td><a href="updates.php?id=<?php echo $result['id']; ?>" data-toggle="tooltip" data-placement="bottom" title=" UPDATE"><i class="fa fa-edit" aria-hidden="true"></i> </a></td>
                    <td> <a href="delete.php?id=<?php echo $result['id']; ?>" data-toggle="tooltip" data-placement="bottom" title=" DELETE "><i class="fa fa-trash" aria-hidden="true"></i> </a></td>
                    
                </tr>
                
                
            <?php
                
                }

                ?>

                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
    
</body>
</html>
