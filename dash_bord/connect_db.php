<?php
mysql_connect('localhost','root','');
mysql_select_db('online_library');
?>

<?php 
session_start();
$email=$_SESSION['email'];

?>
<div style="width:980px; margin:auto ;text-align:center; background-color:#9FC; color:#666; font-family:Georgia, 'Times New Roman', Times, serif">
		<?php
        	echo 'Well Come ' . $email . '  In Your Dash Board';
        ?>
        <script> var d;
		d=Date();
		document.write('<h3>Today </h3>');
		document.write(d);
		</script>
</div>
<div class="conferm">

	<fieldset>
	<legend><u>Conferm page</u></legend>
	<a href="../dash_bord/report.php" style="float:right; text-decoration:none; background-color:#FF99CC;"> Home Page Report</a>
	<p><a href="../dash_bord/Home_page_uplode.php">Go to Home page Uplpde </a></p>
	<p><a href="../dash_bord/dash_bord.php">Go to Book Uplpde </a></p>
	</fieldset>
</div>
