<script src="ckeditor/ckeditor.js" type="text/javascript"> </script>
<link href="../css/dashbord.css" rel="stylesheet" type="text/css" />

<!---------------------------------Header-------------------------------------------------------------->
<?php include('connect_db.php')?>
<!-----------------------------------body---------------------------------------------------------------->

<div style="background-color:#999999; height:auto; width:980px; margin:auto">
<table class="report_page">
<tr>
	<td style="width:; background-color:#666666; height:auto; font-size:24px; text-align:center">Post Tittle</td>
	<td style="width:; background-color:#FF9900; font-size:24px; " colspan="2"> Action</td>
</tr>

<?php
@$delete=$_GET["delete_hm"];
$delete_hm=mysql_query("DELETE FROM article WHERE article_si_no=$delete");

$query=mysql_query("SELECT article_si_no,article_heading,left(article, 500) as article_short From article ORDER by article_si_no DESC");
while($row=mysql_fetch_assoc($query)){
?>
	<tr class="">
		<td style="background-color:#FFFFFF; padding-left:10px"> 
			    <a href="">
		        <h4><?php echo $row["article_heading"]; ?></h4> </a>
				
		</td>
		<td style="width:; background-color:#FF9966; height:auto"> 
			<a href="report.php?delete_hm=<?php echo $row["article_si_no"];?>">Delete</a>
		</td>
		<td style="width:; background-color:#FF9900; " > 
		<a href="Home_page_update.php?update=<?php echo $row["article_si_no"];?>">Update</a>
		</td>
	</tr>
<?php } ?>
</table>
</div>
<!----------------------------Data sent to database-------------------------->
