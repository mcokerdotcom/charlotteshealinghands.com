<?
if (isset($_GET['go'])) {
	$go = $_GET['go'];
} else {
	$go = "Home";
}
$title = str_replace('_',' ',$go);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<?php print "<title>Charlotte's Healing Hands Massage Therapy - $title </title>"; ?>
	<link rel="stylesheet" href="/style.css?v=2" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Julee' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/png" href="/images/ixchel_fav.png">
</head>
<body>

<div id="pageContainer1">

	<div id="pageContainer2">

		<div id="header">
			<?php include("content/header.php"); ?>
		</div>

		<div id="mainContainer">

			<div id="nav">
				<?php include("content/nav.php"); ?>
			</div>

			<div id="content">
				<?php 
				if (is_file("content/$go.php")) {
					include("content/$go.php");
				} else {
					include("content/error.php");
				}
				?>
				<div style="clear:both"></div>
			</div>
	
			<div style="clear:both"></div>

		</div>
		
		<div id="footer">
		<?php include("content/footer.php"); ?>
		</div>

	</div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
	var toggle = document.querySelector('.toggle');
	console.log(toggle);
	toggle.addEventListener('click',function(e) {
		e.preventDefault();
		document.querySelector('#nav').classList.toggle('open');
	});
</script>

</body>
</html>
