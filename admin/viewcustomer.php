<?php
session_start();

if(empty($_SESSION["admin_username"]))
{
    header("Location:index.php");
}

else
{
  
    include("admin_header.php");
    $con = new connec();
    $tbl = "customer";
    $result = $con->select_all($tbl);

   ?>
       
            
            <section>
                <div class="continer-fluid">
                    <div class="row">
                        <div class="col-md-2" style="background-color:maroon;">
                            <?php include('admin_sidenavbar.php'); ?>
                        </div>
                        <div class="col-md-10">
                            <h5 class="text-center mt-2" style="color:maroon;">Customer Details</h5>
                            <a href="addcustomer.php">Add Customer</a>

                            <table class="table mt-5" border = "1" >
                                <thead style="background-color:maroon; color:white;">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Cell No.</th>
                                        <th>Gender</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            ?>
                                            <tr>
                                                <td><?php echo $row["id"]; ?></td>
                                                <td><?php echo $row["fullname"]; ?></td>
                                                <td><?php echo $row["email"]; ?></td>
                                                <td><?php echo $row["cellno"]; ?></td>
                                                <td><?php echo $row["gender"]; ?></td>
                                                <td><?php echo $row["password"]; ?></td>
                                                <td>
                                                    <a href="editcustomer.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Edit</a> 
                                                    <a href="deletecustomer.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <?php

                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </section>
                    
    <?php
     include("admin_footer.php");
}
?>