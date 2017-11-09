<?php
mysql_connect('localhost','root','');
mysql_select_db('online_library');
?>

    <div id="conten_left">
      <div class="div1">
        <div class="div2">
          <font> Lasted Upload</font>
        </div>
      </div>
      
       <!----------------------------------- ----------------->
       

    	<h4><u>Bangla Books:</u></h4> 
        <?php 
         $query=mysql_query("SELECT books_catagori,books_si_no,books_writer FROM books where books_catagori='Bangla' ORDER BY	books_si_no DESC         limit 5");
         while($row=mysql_fetch_assoc($query)){
        ?>
        
         <ul id="book_li">
            <li><a href="index.php?a=book_show&amp; full=<?php echo $row["books_si_no"]; ?>"><?php echo $row["books_writer"]; ?></a></li>
         </ul> 
         
        <?php } ?>
        
        <h4> <u>English Books:</u> </h4>
        <?php 
         $query=mysql_query("SELECT books_catagori,books_si_no,books_writer FROM books where books_catagori='Bangla' ORDER BY	books_si_no DESC         limit 5");
         while($row=mysql_fetch_assoc($query)){
        ?>
         <ul id="book_li">
            <li><a href=""><?php echo $row["books_writer"]; ?></a></li>
         </ul> 
        <?php } ?>
        
        <h4> <u>Engineering Books:</u> </h4>
        <?php 
         $query=mysql_query("SELECT books_catagori,books_si_no,books_writer FROM books where books_catagori='Bangla' ORDER BY	books_si_no DESC         limit 5");
         while($row=mysql_fetch_assoc($query)){
        ?>
         <ul id="book_li">
            <li><a href=""><?php echo $row["books_writer"]; ?></a></li>
         </ul> 
        <?php } ?>
        <h4> <u>Other Books:</u> </h4>
        <?php 
         $query=mysql_query("SELECT books_catagori,books_si_no,books_writer FROM books where books_catagori='Bangla' ORDER BY	books_si_no DESC         limit 5");
         while($row=mysql_fetch_assoc($query)){
        ?>
         <ul id="book_li">
            <li><a href=""><?php echo $row["books_writer"]; ?></a></li>
         </ul> 
        <?php } ?>
	    <!------------------------Books Catagori start---------------------------------------->
        
    </div>
<!-------------------------end conten_left ---------------------------------> 
    
    <div id="conten_right"> 
    	<div class="conten_right_div1" style="">
             <div class="conten_right_div2" style="">
               Latest News: 
             </div>
             
             <div class="marque_div1">
               <marquee direction="left">
                 <font>
                 	We Are Update Our Site So We Are Really Sorry For Your Problem
                 </font>
               </marquee>
             </div>
        </div>
        
        <div id="change_conten">
         	<?php include("select_page.php") ?> 
        </div>
    </div>
