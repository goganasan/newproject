<?php foreach ($newslist as $news): ?>

    <h1>
        <?php echo $news['title'] ?>
    </h1>
    <p>
        <?php echo $news['content'] ?>
    </p>
    <hr>
<?php endforeach; ?>
