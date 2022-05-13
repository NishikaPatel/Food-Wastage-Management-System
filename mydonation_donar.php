<?php  
 $connect = mysqli_connect("localhost", "nishika", "nishika27", "registration");  
 $sql = "SELECT * FROM donar_table INNER JOIN donate_now_form ON donar_table.username= donate_now_form.username";  
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head> 
<style> 
table {
  width: 80%;
  text-align: center;
   font-family: Arial MT;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: teal;
  color: white;
}
</style>	  
           <title>My donation</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
	  </br>
	  <h1 align="center">My Donation Details</h1>
           <br> <br> 
           <div class="container" style="width:800px;">  
                            
                <div class="table-responsive">  
                     <table class="table table-striped"  border="1" align="center" style="line-height:25px;">  
                          <tr>  
                               <th>Username</th>  
                               <th>Type of food</th>  
							    <th>Date of cooking</th>
								<th>Time of cooking</th>  
								   <th>Quantity</th>  
								      <th>Location</th>  
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["username"];?></td>  
                               <td><?php echo $row["typeoffood"]; ?></td>  
							    <td><?php echo $row["dateofcooking"]; ?></td> 
								<td><?php echo $row["timeofcooking"]; ?></td> 
								 <td><?php echo $row["quantity"]; ?></td> 
								  <td><?php echo $row["location"]; ?></td> 
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  