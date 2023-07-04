<?php 
session_start();
include_once __DIR__ . '/utilities/functions.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Generated Password</title>
</head>
<body>
    <div class="col-5 m-auto mt-5">
        <div class="alert alert-info" role="alert">
           <?php echo generatedPassword(8)?>
        </div>
    </div>

</body>
</html>