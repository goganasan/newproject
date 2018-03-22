<?php
/* @var $this yii\web\View */
/* @var $bookList [] frontend\models\Book */
use yii\helpers\Url;
use yii\helpers\Html;
?>
    <h1>Books</h1>
<?php echo Html::a('Create book', [Url::to('bookshop/create')], ['class' => 'btn btn-primary'])?><br><br>

<?php foreach ($bookList as $book) : ?>
    <div class="col-md-10">
        <h3><?php echo $book->name; ?></h3>
        <p><?php echo $book->getDataPublished(); ?></p>

        <p><?php echo $book->getPublisherName(); ?></p>
        <?php foreach ($book->getAuthors() as $author): ?>
            <p><?php echo $author->first_name . ' ' . $author->last_name ?></p>
        <?php endforeach; ?>
        <hr>

    </div>
<?php endforeach;

