<?php
session_start();
if(empty($_SESSION["username"]))
{
    header("Location:index.php");
}
else
{
    include("header.php");
}

?>

<script>
    $(document).ready(function(){
        for(i=1;i<=4;i++)
        {
            for(j=1;j<=10;j++)
            {
                $('#seat_chart').append('<div class="col-md-2 mt-2 mb-2 ml-2 mr-2 text-center" style="background-color:grey;color:white"><input type="checkbox" value="R'+(i+'S'+j)+'" name="seat_chart[]" class="mr-2  col-md-2 mb-2" onclick="checkboxtotal();" >R'+(i+'S'+j)+'</div>;')
            }
        }
    }
</script>

<section class="mt-5 ">
    <h3 class="text-center" style="color: maroon;">Book Your Ticket Now</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div id="seat-map" id="seatCharts">
                    <h3 class="text-center mt-5" style="color:maroon;">Select Seat</h3>
                    <hr>
                    <label class="text-center" style="width:100%;background-color:maroon;color:white;padding:2%;">
                        SCREEN
                    </label>
                    <div class="row" id="seat_chart">
                    </div>
                </div>
                <h6 class="mt-5" style="color:maroon;">Cinema Name</h6>
                <p class="mt-1" id="cinema_name"></p>

            </div>
            <div class="col-md-5">
                <form method="post" class="mt-5">
                    <div class="container" style="color:maroon;">
                    <center>
                        <p>Please fill this form to book your ticket</p>
                    </center>
                    <hr>
                        <label for="cust_id"><b>Customer Id</b></label>
                        <input type="number" style="border-radius:30px;"  name="cust_id"  required value="<?php echo $_SESSION["cust_id"]; ?>">

                        <label for="email"><b>Show</b></label>
                        <input type="text" style="border-radius:30px;"  name="show_id"  required>

                        <label for="psw"><b>No. of Ticket</b></label>
                        <input type="number" style="border-radius:30px;"  name="no_ticket"  required>

                        <label for="psw-repeat"><b>Seat Details</b></label>
                        <input type="text" style="border-radius:30px;"  name="seat_dt_id" required>

                        <label for="number"><b>Booking Date</b></label>
                        <input type="date" style="border-radius:30px;"  name="booking_date" required>
                        <br>

                        <button type="submit" name="btn_booking" class="btn" style="background-color:maroon;color:white;">Book Now</button>


                        <hr>
                    </div>
                    <hr>
                </form>
            </div>
        </div>
    </div>

</section>




<?php
include("footer.php");
?>