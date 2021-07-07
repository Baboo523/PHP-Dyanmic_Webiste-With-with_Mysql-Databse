<?php
    include('lib/connection.php');
?>
<html>
<head>
    <title>Our First Dynamic Website</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="wrapper">
    <?php
        include('header.php');
        include('menu.php');
    ?>
    <div id="content">
        <p>
            This is our Educational Website. Please go through the website for more updates.
            This is our Educational Website. Please go through the website for more updates.
            This is our Educational Website. Please go through the website for more updates.
            This is our Educational Website. Please go through the website for more updates.
            This is our Educational Website. Please go through the website for more updates.
        </p>
    </div>
    <?php
        include('news_headlines.php');
        include('footer.php');
    ?>
</div>
</body>
</html>
