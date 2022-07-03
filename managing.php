<?php
//Save the name
$name =($_POST["name"]);
$myfile = fopen("name.g", "w") or die("Unable to open file!");
fwrite($myfile, $name);
fclose($myfile);
//Create Basic Stats
$myfile = fopen("stats.g", "w+") or die("Unable to open file!");
	$txt = "1\r\n";
	fwrite($myfile, $txt);
	$txt = "0\r\n";
	fwrite($myfile, $txt);
	$txt = "1\r\n";
	fwrite($myfile, $txt);
	$txt = "1\r\n";
	fwrite($myfile, $txt);
	$txt = "0\r\n";
	fwrite($myfile, $txt);
	$txt = "z500\r\n";
	fwrite($myfile, $txt);
	$txt = "0000\r\n";
	fwrite($myfile, $txt);
	$txt = "10\r\n";
	fwrite($myfile, $txt);
	fclose($myfile);
	echo ("<a href='pregame.php'>Start Your Adventure</a>");
?>
<html>
<body>
<script>


var lines =<?php echo json_encode($lines); ?>;
       
// Display the array elements

	</script>
	</body>
	</html>