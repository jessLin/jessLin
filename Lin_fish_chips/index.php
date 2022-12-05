<!--
<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="utf-8" />
    <title>Lin's fish and chips Menu page</title>
    <link rel="stylesheet" href="lin_styles.css">
</head>


 <body>
-->



    <?php
      define('ISITSAFETORUN', TRUE);
      $index = "current";
      $menu = "rest";
      $gPage = "rest";
      $review = "rest";
      $contact = "rest";

      require "linHeader.php";
    ?>
    
    <main>
        
    <?php
    $name = "Ben";
    $age = 17;
    $isMale = true;
    echo  "<h1>hello world: $name</h1>";
    echo "<hr>";
    echo "<p>$name is $age</p>";
    $age = 18;
    echo "next year $name will be $age";
    echo "<p>$name</p>";
        
    if ($isMale){
        echo "$name is male";
    }
    if (!$isMale){
        echo "$name is female";
    }

    echo "<p>$name[0]</p>";
    
    echo str_replace("en", "ing", $name); 
    
   
    echo substr($name, 0, 2);
        
    echo max(2, 4, 8, 28, 6);
    echo "<p><h1>happle</h1></p></ hr>";
    echo ceil(3.3);
    echo floor(4.6);
    echo "<hr>";
    ?>
    
<!--   ?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> == index.php-->
        
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        name: <input type="text" name="name">
        <input type="submit">
<!--
    <form action="index.php" method="post">
        name: <input type="text" name="name">
        <input type="submit">
-->
        
    </form>
    <br>
    <?php echo $_POST["name"];
    
    ?>
        <br>
        
            <div>
                <div>traditanal fish and chips</div>
                <p>fish and chips burger and pies sausage </p>

                <p>firs </p>
                <p>second</p>
                <p>third paragrap</p>
            </div>


     <?php require "links.php";?>
        

    </main>

    <?php require "linFooter.php";?>


