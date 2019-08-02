<?php 
if (isset($_POST['submit']))
{
    //form was submit
    if (empty($_POST['name'] ['email'] ['message']))
    {
       //error - do something
    }
    // if you need check only for empty field better to use 
    // if (trim($_POST['username']) === '') {// error}
}

?>