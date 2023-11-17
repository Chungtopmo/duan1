<?php
session_start();

if(isset($_POST["btn_insert"]))
{
    include("../conn.php");
    $name=$_POST["cinema_name_txt"];
    $location=$_POST["cinema_loaction_txt"];
    $city=$_POST["cinema_city_txt"];
    $con = new connec();
    $sql="insert into cinema values(0,'$name','$location','$city')";
    $con->insert($sql,"Record Inserted");
    header("Location:viewcinema.php");
}
if(empty($_SESSION["admin_username"]))
{
    header("Location:index.php");
}

else
{
    include("admin_header.php");
  

   ?>
       
            
            <section>
                <div class="continer-fluid">
                    <div class="row">
                        <div class="col-md-2" style="background-color:maroon;">
                            <?php include('admin_sidenavbar.php'); ?>
                        </div>
                        <div class="col-md-10">
                            <h5 class="text-center mt-2" style="color:maroon;">Add Cinema</h5>
                            <from methor="post">
                             <div class="container" style="color:maroon;">
                                <label for="email"><b>Cinema Name</b></label>
                                <input type="text" style="border-radius:30px;" placeholder="Enter Cinema Name" name="cinema_name_txt"  required>

                                <label for="email"><b>Cinema Location</b></label>
                                <input type="text" style="border-radius:30px;" placeholder="Enter Cinema Location" name="cinema_loaction_txt"  required>
                                
                                <label for="email"><b>Cinema City</b></label>
                                <input type="text" style="border-radius:30px;" placeholder="Enter Cinema City" name="cinema_city_txt"  required>

                                <button type="submit" name="btn_insert" class="btn" style="background-color:maroon;color:white;">Insert</button>
                             </div>
                            </from>
                        </div>
                    </div>
                </div>
            </section>
                    
    <?php
     include("admin_footer.php");
}
?>