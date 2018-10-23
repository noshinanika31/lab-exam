<?php
	session_start();
?>
<html>
	<head>
		<title>Profile data </title>
	</head>
	<body>
	<form action='profile_data.php' method='post' target="_top">
		<table >
			<tr>
				 <td>
					ID
					<?php
						echo str_repeat('&nbsp;', 8).": ".$_SESSION['id'];
					?>
					
					<br>
					<hr/>
					Name
					<?php
						echo str_repeat('&nbsp;', 9).": ".$_SESSION['name'];
					?>
					
					<br>
					<hr/>
					Email
					<?php
						echo str_repeat('&nbsp;', 10).": ".$_SESSION['email'];
					?> 
					
					<br>
					<hr/>
					Gender
					<?php
						echo str_repeat('&nbsp;', 7).": ".$_SESSION['gender'];
					?>
					
					<br>
					<hr/>
					Date of Birth
					<?php
						echo str_repeat('&nbsp;', 1).": ".$_SESSION['day']."/".$_SESSION['month']."/".$_SESSION['year'];
					?>
					<br>
					<hr/>
					User Type :
					<?php
						echo str_repeat('&nbsp;', 2).": ".$_SESSION['usertype'];
					?>
					
					<br>
					<hr/>
					<a href="edit_profile.php">Edit_Profile</a>
					<a href ="admin.php">Go home</a>
				
			   </td>
			   
			 </tr>
		</table>
		<form>
	</body>
</html>
