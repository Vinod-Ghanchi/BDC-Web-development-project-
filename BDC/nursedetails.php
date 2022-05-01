
<?php
include_once('connection.php');
$sql="select * from nurses";
$result=mysqli_query($conn,$sql);

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title class="heading"> Blood Donation centre </title>
    <link rel='icon' type="image/x-favicon" href="favicon.ico"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>

<h2>Nurse details</h2>
<table align="center" border="1px"  class="table">
	<tr>
		<th colspan="4"><h2 style="text-align:center; margin-left:60px;">Nurse Records</h2></th>
		</tr>
			  <th> N-ID </th>
			  <th> Name </th>
			  <th> Age </th>
			  <th> Gender </th>
        <th> Hospital </th>
        <th> Phone Number </th>

		</tr>

		<?php while($rows=mysqli_fetch_assoc($result))
		{
		?>
		<tr> <td><?php echo $rows['nid']; ?></td>
		<td><?php echo $rows['nname']; ?></td>
		<td><?php echo $rows['nage']; ?></td>
		<td><?php echo $rows['ngender']; ?></td>
    <td><?php echo $rows['hospital']; ?></td>
    <td><?php echo $rows['nphone']; ?></td>

		</tr>
	<?php
               }
          ?>

	</table>
	</body>
	</html>