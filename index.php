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
    <form action="forum.php " method="post">
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
                <input type="submit" value="Submit">
        </label>
</form>
</fieldset>
</body>
</html>