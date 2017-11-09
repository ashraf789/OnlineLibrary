<?php
mysql_connect('localhost','root','');
mysql_select_db('online_library');
?>
  	
		<table class="table" height="auto" style="overflow:auto; ">
        

		    <tr height="30px" bgcolor="#FFFFCC"> 
            	<td width="600px" style="padding-left:10px">Upload Book</td>
                <td width="80px" style="padding-left:5px">Upload Date</td>
            </tr>
			
			
			<?php
			
			    $full=$_GET['full'];
				$query=mysql_query("Select * from books where books_si_no='$full' ");
				while($row=mysql_fetch_assoc($query)){
			 ?>  	
	
            <tr > 
                <td id="table_left"><a href=""><?php echo $row['books_tittle'];?></a></td>
            	<td id="table_right"> 14.02.15</td>
            </tr>
            <?php } ?>

        </table>

