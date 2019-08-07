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
                <textarea name="message" id="message" cols="30" rows="10"><?php echo $_SESSION['message'] ?>
                </textarea>
                <br>
                <input type="submit" name='submit' value="Submit">
        </label>
</form>
</fieldset>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>