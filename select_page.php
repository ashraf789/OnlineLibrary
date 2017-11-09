<?php
if(isset($_GET['a']))
{
	
	if($_GET['a']=='ba')
	{
		require_once 'all_books/bangla_books/bangla_books.php';
	}
	
	if($_GET['a']=='en')
	{
		require_once 'all_books/english_books/english_books.php';
	}
	
	if($_GET['a']=='eg')
	{
		require_once 'all_books/engineering_books/engineering_books.php';
	}
	
	if($_GET['a']=='ot')
	{
		require_once 'all_books/other_books/other_books.php';
	}
	
	if($_GET['a']=='co')
	{
		require_once 'contact.php';
	}
	if($_GET['a']=='book_show')
	{
		require_once 'all_books/books_show.php';
	}
	if($_GET['a']=='article_full')
	{
		require_once 'all_books/article_full.php';
	}
	if($_GET['a']=='report')
	{
		require_once 'all_books/article_full.php';
	}
	
}

else
{
   require_once 'home_page.php'; 
}



?>