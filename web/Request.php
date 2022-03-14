<?php 
  session_start();
?>

!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Bus Schedule</title>
    
</head>

  <body>   
  
    <div class="container">
      <div >   
        <h2 >Request</h2>

        <form action="" method="post" role="form" name="frm">
    			<input name="date" size="20" placeholder="Date"/><br><br>
    			<input name="start" type="text" size="20" placeholder="Start Time (0000)"/><br><br>
    			<input name="end" type="text" size="20" placeholder="End Time (2400)"/><br><br>
    			<input name="no of people" type="number" size="20" placeholder="No Of People" /><br><br>
    			<input name="reason" type="text" size="20" placeholder="reason"/><br><br>
    		  <button name="submit" type="submit" value="Submit" >Submit</button>
	     </form>
	   </div>
    </div>   
  </body>
</html>