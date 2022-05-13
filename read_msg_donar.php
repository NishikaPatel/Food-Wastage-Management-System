<?php include_once 'notification_conn_donar.php'; ?>
<?php

if(isset($_GET['id']))
{
	$main_id = $_GET['id'];
	$sql_update = mysqli_query($conn,"UPDATE message_donar SET status=1 WHERE id='$main_id' ");
}
?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity=
	"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="own_style.css">

    <title>Hello, world!</title>
<style>
table
}
font-family: Arial MT;
}
</style>
  </head>
  <body>
  
  <div class="container" id="table1">
		  <div class="row">
		  <table class="table">
		  <thead class="thead-dark">
			<tr>
			  <th scope="col">Sr no.</th>
			  <th scope="col">Name</th>
			  <th scope="col">Message</th>
			  <th scope="col">Date</th>
			  <th scope="col">Seen</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php 
		  $sr_no=1;
		  $sql_get = mysqli_query($conn,"SELECT * FROM message_donar WHERE status=1");
		  while($main_result = mysqli_fetch_assoc($sql_get)) :?>
			<tr>
			  <th scope="row"><?php echo $sr_no++; ?>     </th>
			  <td><?php echo $main_result['name']; ?></td>
			  <td><?php echo $main_result['message']; ?></td>
			  <td><?php echo $main_result['cr_date']; ?></td>
			  <td><a href="delete_notification_donar.php?id=<?php echo $main_result['id']; ?>" class="text-danger"><i class="far fa-eye"></i></a></td>
			</tr>
			<?php endwhile ?>
			</tbody>
			</table>
		  </div>
  </div>
  
  
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>