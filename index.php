<?php
if ($_REQUEST['submit'] == 'Submit') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['message'] = $message;

    $errorArray = [];

    //name validation
    if ($name == "") {
        array_push($errorArray, "Fill in your name");
    }

    /*email validation
    if ($email == "") {
        array_push($errorArray, "Fill in your email");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errorArray, "email is not valid");
    }
    */

    //message validation
    if ($message == "") {
        array_push($errorArray, "message is empty");
    }

    //unset($_SESSION['errors']);

    if (!empty($errorArray)) {
        $_SESSION['errors'] = $errorArray;
        header('Location: index.php');
    }

    
}
echo "<script>console.log('" . $name .  "');</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
<?php if (isset($_SESSION['errors'])) : ?>
        <div class="row">
            <div class="col-md-12 error">
                <ul>
                    <?php foreach ($_SESSION['errors'] as $errorArray) : ?>
                        <li><?php echo $errorArray ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    <?php endif ?>
    
    <fieldset>
    <legend>Contact Us</legend>
    <form action="forum.php " method="POST">
        <label>
                Fullname:<br>
                <input type="text" id="name" name="name" value="<?php echo $_SESSION['name'] ?>"><br>
        </label>
        <label> 
                Email: <br>
                <input type="text" id="email" name="email" value="<?php echo $_SESSION['email'] ?>"><br>
        </label>       
        <label>
                Your message:<br>
                <textarea name="message" id="message" cols="30" rows="10"><?php echo $_SESSION['message'] ?></textarea><br>
                <br>
                <input type="submit" name='submit' value="Submit">
        </label>
</form>
</fieldset>
</body>
</html>