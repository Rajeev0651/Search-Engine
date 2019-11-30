<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Veda</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<link rel="icon" href="veda_logo.ico" type="image/x-icon">
<body>
<style>
.header {
	padding: 10px 16px;
	background: #555;
	color: #f1f1f1;
}

/* Page content */
.content {
	padding: 16px;
}

/* The sticky class is added to the header with JS when it reaches its scroll position */
.sticky {
	position: fixed;
	top: 0;
	width: 100%
}

/* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */
.sticky+.content {
	padding-top: 102px;
}

.btn {
	border: none;
	background-color: inherit;
	padding: 14px 28px;
	font-size: 16px;
	cursor: pointer;
	display: inline-block;
}

/* On mouse-over */
.btn:hover {
	background: #eee;
}

.success {
	color: green;
}

.info {
	color: dodgerblue;
}

.warning {
	color: orange;
}

.danger {
	color: red;
}

.default {
	color: black;
}
</style>
	<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");

var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
<c:out value="${sessionScope.query}" />
<c:remove var="query" scope="session" />
</script>
<script>var variable = query; </script>
	<div class="header" id="myHeader">
		<h2>VEDA</h2>
		<form action="LuceneTester" class="form-horizontal" method="get">
			<div class="input-group">
				<input name="q" placeholder = "Search here" class="form-control" type="text">
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit" id="addressSearch">
						<span class="icon-search"></span>
					</button>
				</span>
			</div>
		</form>
	</div>
	<div class="container">
		<h2>Websites Lists</h2>
		<div class="list-group">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veda";

$len = 0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$page_diaplay = array_fill(10001, 277, 'abc');
$display = array_fill(1, 277, 'abc');

$myfile = fopen("All_site_lists.txt", "r") or die("Unable to open file");
for ($x = 10002; $x <= 10277; $x ++) {
    $page_diaplay[$x] = fgets($myfile);
}

$sql = "SELECT Webpages FROM results";
$result = $conn->query($sql);

if (! $result) {
    die($conn->error);
}
$min = 0;
while ($row = $result->fetch_assoc()) {
    $link = $page_diaplay[$row["Webpages"]];
    echo "<a href='$link' class='list-group-item'>" . $page_diaplay[$row["Webpages"]] . "</a>";
    $min+=1;
}
if ($min==0)
{
    echo "<br><br><H1>"."No result found :("."</H1>";
}else{
    echo "<br>"."About ".$min." results in ".".000001 sec";
}
fclose($myfile);
$conn->close();
?>
</div>
	</div>
</body>
</html>