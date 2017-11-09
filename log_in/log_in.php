<fieldset style="width:500px; height:145px; margin:0 auto; background-color:#507EEB">
	<table style="width:300px; height:100px; margin:0 auto; font-family: Arial, sans-serif;">
    <!--send data to database-->
    
    
	<form action="#" method="post" name="form" onSubmit="return valid()">
    	<tr>
        	<td> Email</td>
            <td> </td>
        	<td> <input type="email" name="Email" style="background-color:#75BAFF; border-radius:5px 5px 5px 5px" placeholder=" emai" /></td>
        </tr>
    
    	<tr>
        	<td> Password</td>
            <td> </td>
      		<td> 
               <input type="password" name="Password" style="background-color:#75BAFF; border-radius:5px 5px 5px 5px" placeholder=" password" />
            </td>
        </tr>
		
        <tr>
        	<td> </td>
            <td> </td>
        	<td> <input type="submit" style="background-color:#75BAFF; border-radius:5px 5px 5px 5px;" value="Log in" name="log_in" /></td>
        </tr>
     
      </form>
      

    </table>
</fieldset>
<!--</body>-->

<?php 
session_start();
if(isset($_POST['log_in']))
{
$email=$_POST['Email'];
$password=$_POST['Password'];

if($email=='syedashrafullah15@gmail.com' & $password=='123456')
	{	
		$_SESSION['email']=$email;
		$_SESSION['password']=$password;
		
	    header('location:../dash_bord/dash_bord.php');
	}
	
	else{
		 echo "<script> alert('You Are Fail to log in'); </script>";
		}
}
?>
