
    <?php
      define('ISITSAFETORUN', TRUE);
      $index = "rest";
      $menu = "rest";
      $gPage = "rest";
      $review = "rest";
      $contact = "current";
      require "linHeader.php";
    ?>
    
    <main>
        
        <form action="contactUs.php" method="post">
        <p>First name<input type="text" name="firstname" id="firstname" size="30" minlength="2" maxlength="30" onchange=""></p>
        <p>Surname<input type="text" name="surname" id="surname" size="30" min="2" maxlength="30"></p>  
        <p><input type="text" name="email" id="email" value="email address" size="60" min="6" maxlength="100"></p>
            
        <input type="submit">
        
    </form>
    <br>
    <?php 

        echo $_POST["firstname"] . "." . $_POST["surname"]; 
        
        echo " email address " . $_POST["email"];
    ?>
        
        
        <p>Lin's Fish &#38; chips</p>

        
        <p>First name<input type="text" name="firstname" id="firstname" size="30" minlength="2" maxlength="30" onchange=""></p>
        <p>Surname<input type="text" name="surname" id="surname" size="30" min="2" maxlength="30"></p>
            
        <p><input type="button" name="submit" id="submitName" value="submit name" onclick="submitName()"></p>
        
        <p>full name is: <span id="fullname"></span></p>
        <script src="contactUs.js"> 
        <script>
            "use strict"
            document.write("<h2>my email address</h2>");
        </script>
        
        <p><input type="text" name="email" id="email" value="email address"></p>
        

        <p>choose quantity: <input type="number" name="itemquantity" id="itemquantity" min="0" max="10"></p>
        
        
        <p>20 Old Milton Road</br>
           New Milton</br>
           Hampshire</br>
           BH25 6DX</p>
        <p>Tel: 01425 614020</p>

    <?php require "links.php";?>
        

    </main>

    <?php require "linFooter.php";?>

