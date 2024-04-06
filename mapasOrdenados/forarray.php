<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX002</title>
</head>
<body>
    <form action="" method="post">
        <?php
            for ($i=0;$i<7;$i++){
                echo '<input type="number" name="valores[]"><br>';
            } 
        ?>
        <button type="submit">Ok!</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST)) {
        if(isset($_POST['valores'])){
            $vetor = $_POST['valores'];
            var_dump($vetor);
        }
    }
?>