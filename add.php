<!DOCTYPE HTML>
<html>
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>
		<h2>PHP Form Valication Example</h2>
		<form method="post">
			 <p>So Xe</p><input type="text" name="soXe" value=""><br>
			 <p>Nhan Hieu</p><input type="text" name="nhanhieu" value=""><br>
			 <input type="submit" name="submit" value="Submit">
		</form>
		<?php
			$soXe=$_POST["soXe"];
			$nhanhieu=$_POST["nhanhieu"];
			function pg_connection_string_from_database_url(){
				extract(parse_url($_ENV["DATABASE_URL"]));
				return "user=$user password=$pass host=$host dbname=".substr($path,1);
			}
			$db = pg_connect(pg_connection_string_from_database_url());
			if(!$db){
				echo "Eror : Unable to open database\n";
			}else{
				echo "Opened database successfully\n";
			}
			$sql="INSERT INTO XE_OTO (soXe, nhanhieu) VALUES ('$soXe','$nhanhieu')";
			$ret = pg_query($db,$sql);
			if(!$ret){
				echo pg_last_error($db);
			}else{
				echo "Insert successfully\n"; Personid int NOT NULL AUTO_INCREMENT
				echo "$sql";
			
			}
			pg_close($db);?>
	</body>
</html>