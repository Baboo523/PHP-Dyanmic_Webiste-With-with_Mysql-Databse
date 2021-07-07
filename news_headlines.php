<div id="news">
    <?php
        include('lib/connection.php');
        $get_news = mysqli_query($con,"select * from news");

    ?>
    <ul>
        <?php
            while($news_rec=mysqli_fetch_array($get_news)){
                ?>

                    <li><?php echo $news_rec['news_title'];  ?></li>

                <?php
            }
        ?>
    </ul>
</div>