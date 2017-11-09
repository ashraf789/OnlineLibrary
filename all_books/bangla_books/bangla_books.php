<?php
@mysql_connect('localhost','root','');
mysql_select_db('online_library');
?>

<table class="table" height="auto" style="overflow:auto; ">
	<tr height="30px" bgcolor="#FFFFCC"> 
        <td width="600px" style="padding-left:10px">Upload Book</td>
        <td width="80px" style="padding-left:5px">Upload Date</td>
     </tr>			
	 <?php
		$query=mysql_query("Select * from books where books_catagori='Bangla' ");
		while($row=mysql_fetch_array($query)){
	 ?>  	
	
     <tr > 
        <td id="table_left"><a href="index.php?a=book_show&amp;full=<?php echo $row['books_si_no'];?>"><?php echo $row['books_writer'];?></a></td>
        <td id="table_right"> 14.02.15</td>
     </tr>
	<?php } ?>				
                
</table>