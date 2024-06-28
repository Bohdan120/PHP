<?php
/** @var yii\web\View $this */
?>
<h1>Books</h1>
<hr><hr>

<?php foreach($bookList as $book): ?>
<div class="col-10">
    <h3><?= $book->name; ?></h3>
    <p><?= $book->date_published; ?></p>
    <?php echo $book->getPublisherName(); ?>
    <?php foreach ($book->getAuthors() as $author): ?>
        <p><?= $author->first_name.' '.$author->last_name; ?></p>
    <?php endforeach; ?>
</div>
<hr>
<?php endforeach; ?>

