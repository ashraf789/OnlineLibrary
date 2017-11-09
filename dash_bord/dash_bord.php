<script src="script/option.js" type="text/javascript"> </script>
<script src="ckeditor/ckeditor.js" type="text/javascript"> </script>
<link href="../css/dashbord.css" rel="stylesheet" type="text/css" />
<!---------------------------------Header-------------------------------------------------------------->
<?php include('connect_db.php')?>
<!-----------------------------------body---------------------------------------------------------------->
<div style="background-color:#9CC; width:980px; height:auto; font-size:18px; margin:auto; padding-top:20px">
    <fieldset style="border-color:#FC3;">
      <legend style="font-size:20px; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; color:#96C">Uplode Books Here</legend>
      <form action="#" name="uplode" style=" padding-left:30px; " method="post">
       <table cellpadding="5px" style="font-size:15px; font-family:'Times New Roman', Times, serif; color:#66C">
         <tr>
            <td> Books Catagorie</td>
            <td> :</td>
            <td>
            <select name="catagori" onchange=change_value() style="width:300px; font:Tahoma, Geneva, sans-serif; color:#C96; font-size:12px">
                 <script type="text/javascript">
                 for(var a=0 ;a<main.length ;a++ )
                 {
                    document.write("<option value=\""+main[a]+"\">"+main[a]+"</option>"); 
                 }
                 </script>    
            </select> 
            </td>
         </tr>
         <tr>
            <td> Books Writer </td>
            <td> :</td>
            <td>
            <select name="writer" style="width:300px; font:Tahoma, Geneva, sans-serif; color:#C96; font-size:12px">
            <option>First Select Catagori  </option>
            </select>
            </td>
         </tr>
         <tr>
            <td>Books Tittle </td>
            <td>: </td>
            <td> <textarea name="tittle"> </textarea>
            <script>
                CKEDITOR.replace('tittle');
            </script>
          </tr>
          <tr>
            <td><input type="submit" name="uplode" id="uplode" value="Uplode"> </td>
          </tr>
       </table>
      </form>
    </fieldset>
</div>


<!----------------------------Data sent to database-------------------------->
<?php
mysql_connect('localhost','root','');
mysql_select_db('online_library');
?>

<?php
@$catagori=$_POST['catagori'];
@$writer=$_POST['writer'];
@$tittle=$_POST['tittle'];

if(isset($_POST['uplode']) ==true){
	
	if($catagori=='Select' || $catagori==null || $writer=='Select_writer' || $tittle==null || $tittle=='')
	{
		echo " <script> alert('Insert Data'); </script> ";
	}
	else{
		$send=mysql_query("INSERT into books(books_catagori,books_writer,books_tittle) value('$catagori','$writer','$tittle') ");
		if($send){
			echo "<script> alert('Successfully Send Data '); </script>";
			}else{
				echo "<script>alert('Failed to send data'); </script>";
				}
		}
}
?>