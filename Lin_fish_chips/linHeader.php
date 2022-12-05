<?php
// This file holds the page footer and expects to find the footer in $myfooter
if(!defined('ISITSAFETORUN')) {
   // This provides protection against file being called directly - if it is, ISITSAFETORUN will not be defined
   die('This file does no useful work alone'); // and so this warning message will be issued
}
?>
<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="utf-8" />
    <title>Lin's fish and chips Menu page</title>
    <link rel="stylesheet" href="lin_styles.css">
</head>


 <body>
    <header>
        
        <div><h1>Lin's Fish &#38; chips</h1></div>
        <nav class="topNav">
            <ul>

                
                <li><a id=<?php echo $index ?> href= "index.php">Home</a></li>
                <li><a id=<?php echo $menu ?> href="menu.php">Menu</a></li>
                <li><a id=<?php echo $gPage ?> href="https://g.page/lins-fish-chips">lins</a></li>
                <li><a id=<?php echo $review ?> href="review.php">Customer Review</a></li>
                <li><a id=<?php echo $contact ?> href="contactUs.php">Contact us</a></li>
                
            </ul>
        </nav>
    </header>
