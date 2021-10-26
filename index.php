<?php
require_once 'class.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['name'], $_POST['dob'], $_POST['hobby'])){
//        echo $_POST['name']. ' '. strtotime($_POST['dob']). ' '. $_POST['hobby'];
//        echo floor((time() - strtotime($_POST['dob'])) / 31556926) ;
        $p1 = new Person($_POST['name'], $_POST['hobby'], $_POST['dob']);
        $p1->setAge();
        $age =  $p1->getAge();
        echo "Hi $p1->name , you are $age years old! You like to confuse yourself with $p1->hobby";

//        echo '<pre>';
//        var_dump($p1);
//        echo '</pre>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Day 30 Quiz</title>
    <link rel="stylesheet" href="">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        html {
            box-sizing: border-box;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Helvetica Neue", "Arial", sans-serif;
            font-size: calc(1.5vh + 1vw + 1%);
            line-height: 1.5;
        }
        body{
            overflow: auto;
            min-height: 100vh;
            width: 100%;
            padding: 0.5rem 1rem;
        }
        main,
        header{
            padding: 0.5rem 2rem;
        }
    </style>
</head>
<body>

<form action="" method="post">
    <input name="name" type="text" placeholder="Name">
    <input name="dob" type="date" placeholder="Date of Birth">
    <input name="hobby" type="text" placeholder="Hobby">
    <input type="submit" name="submit">
</form>

</body>
</html>