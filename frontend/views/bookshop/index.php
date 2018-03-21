<?php
/* @var $this yii\web\View */
/* @var $bookList [] frontend\models\Book */
?>
    <h1>Books</h1>

<?php foreach ($bookList as $book) : ?>
    <div class="col-md-10">
        <h3><?php echo $book->name; ?></h3>
        <p><?php echo $book->getDataPublished(); ?></p>

        <?php

        echo $book->getPublisherName();

//        echo '<pre>';
//        print_r($publisher);
//        echo '</pre>';
        ?>
        <hr>

    </div>
<?php endforeach;

