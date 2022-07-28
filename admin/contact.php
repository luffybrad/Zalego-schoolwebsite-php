<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>
  <body>
    <header>

    </header>
    <main>
        <div class="container">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Fullname</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phonenumber</th>
                  <th scope="col">Password</th>
                  <th scope="col">Confirm Password</th>
                  <th scope="col" colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                //connect to db
                require_once("connection.php");
                //variable for query statement
                $sql="SELECT * FROM `contact_us`";
                //variable for execution of query statement
                $result=mysqli_query($conn,$sql);
                //variable for retireved rows in db
                while($row=mysqli_fetch_assoc($result)){?>
                <tr>
                  <th><?php echo $row["id"]?></th>
                  <th><?php echo $row["fullname"]?></th>
                  <td><?php echo $row["email"]?></td>
                  <td><?php echo $row["phonenumber"]?></td>
                  <td><?php echo $row["password"]?></td>
                  <td><?php echo $row["cpassword"]?></td>
                  <td>
                    <!--update form option-->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModal<?php echo $row['id']?>">
                    Update
                    </button>
                    <!-- Update Modal -->
                 <div class="modal fade" id="updateModal<?php echo $row['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Update: <?php echo $row['fullname']?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!--update form-->
                            <form method="POST" action="update.php">
                            <div class="mb-3">
                                    <input type="text" name="id"  class="form-control" value="<?php echo $row['id']?>" hidden="true">
                                </div>
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">Full name</label>
                                    <input type="text" name="fullname" class="form-control" id="fullname" value="<?php echo $row['fullname']?>">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"  value="<?php echo $row['email']?>">
                                </div>
                                <div class="mb-3">
                                    <label for="phonenumber" class="form-label">Phonenumber</label>
                                    <input type="number" name="phonenumber" class="form-control" id="phonenumber"  value="<?php echo $row['phonenumber']?>">
                                </div>
                                <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password"  value="<?php echo $row['password']?>">
                                </div>
                                <div class="mb-3">
                                        <label for="cpassword" class="form-label">Confirm Password</label>
                                    <input type="password" name="cpassword" class="form-control" id="cpassword"  value="<?php echo $row['cpassword']?>">
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit"  class="btn btn-success"> Update</button>
                            </div>
                            </form>
                            <!--end of update form-->
                        </div>
                        </div>
                    </div>
                    </div>
                <!--end of modal-->
                <!--end of update option-->
                </td>
                 
                <td>
                    <!--delete form option-->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $row['id']?>">
                    Delete
                    </button>
                       <!-- delete Modal -->
                 <div class="modal fade" id="deleteModal<?php echo $row['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Delete: <?php echo $row['fullname']?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!--start of deletion form-->
                            <form method="POST" action="delete.php">
                            <div class="mb-3">
                                    <input type="text" name="id" class="form-control" id="id" value="<?php echo $row['id']?>" hidden="true">
                                </div>
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">Full name</label>
                                    <input type="text" name="fullname" class="form-control" id="fullname" value="<?php echo $row['fullname']?>">
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger"> Delete</button>
                            </div>
                            </form>
                            <!--end of deletion form-->
                        </div>
                        </div>
                    </div>
                    </div>
                <!--end of modal-->
                <!-- end of delete form option-->
                </td>
              
                </tr>
              <?php  } ?>
              </tbody>
            </table>
             
        </div>
    </main>
    <footer>

    </footer>
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>