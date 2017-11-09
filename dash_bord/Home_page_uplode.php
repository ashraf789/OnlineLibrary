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
         	<td> Catagori</td>
            <td>: </td>
            <td><input type="text" name="article_catagori" style="width:200px"/> </td>
         </tr>
         <tr>
         	<td>Heading</td>
            <td>: </td>
            <td><input type="text" name="article_heading" style="width:200px"/> </td>
         </tr>
         <tr>
            <td>article </td>
            <td>: </td>
            <td> <textarea name="article"> </textarea>
            <script>
                CKEDITOR.replace('article');
            </script>
          </tr>
          <tr>
            <td><input type="submit" name="send" id="send" value="send"> </td>
          </tr>
       </table>
      </form>
    </fieldset>
</div>


<!----------------------------Data sent to database-------------------------->
<?php
@$catagori=$_POST['article_catagori'];
@$heading=$_POST['article_heading'];
@$article=$_POST['article'];

if(isset($_POST['send']) ==true){
	
	if($catagori=='' || $catagori==null || $heading=='' || $article==null || $article=='')
	{
		echo " <script> alert('Insert Data'); </script> ";
	}
	else
	{
	 $send=mysql_query("INSERT into article(article_catagori,article_heading,article) value('$catagori','$heading','$article')");
	  if($send){
			echo "<script> alert('Successfully Send Data '); </script>";
			}else{
				echo "<script>alert('Failed to send data'); </script>";
				}
		}
}
?>