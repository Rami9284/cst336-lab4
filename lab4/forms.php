<?php
$firstName = $_POST['firstname'];
$lastname = $_POST['lastname'];
print_r($_POST);
?>

<!DOCTYPE html>
<html>
    <head>
        
    </head>
    
    <body>
        <form action = "index.php" method = 'POST'>
            First Name: <input type="text" name="firstname"/>
            Last Name: <input type="text" name="lastname"/>
            <input type="submit" value="Submit"/>
        </form>
        <?php
            if(isset($firstName)){
                echo "welcome $firstName $lastname! <br>";
            }
        ?>
    </body>
</html>