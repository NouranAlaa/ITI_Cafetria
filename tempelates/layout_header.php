<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?></title>
    <!-- custom CSS -->
    <link rel="stylesheet" href="assets/style/bootstrap.css" >
    <link rel="stylesheet" href="assets/style/main.css" />
  
</head>
<body>
    <!-- container -->
    <div class="container">
        <?php
        // show page header
        echo "<div class='page-header'>
                <h1>{$page_title}</h1>
            </div>";
        ?>