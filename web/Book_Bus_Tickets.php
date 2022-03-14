<?php 
    session_start();

?>

<!DOCTYPE html>
<html >

<body>
    <form method="post" action="Request.php">

       
        <fieldset>
            <legend><b>BOOK BUS TICKETS</b></legend><br>
            <br>
            <a href="VehicleList.php">Back</a>

            <h3>Please enter below the bus name that you want to book:</h3>
            <h4>Bus Name :</h4>
             <input type="text" name="busName">
            <br><br>
            <h4>Date :</h4>
            <input type="date" name="date">
            <br><br>

            <input type="submit" name="submit" value="Book Ticket" action="Request.php">
            <input type="reset" name="reset" value="Reset"><br><br>
        </fieldset>

        
</body>

</html>