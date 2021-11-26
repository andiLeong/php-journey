

<?php include('Partials/header.php') ?>
<h1>category</h1>



<ul>
<?php foreach ($categories as $category) : ?>

<li><?= $category->name ?></li>
<?php endforeach ?>


</ul>

<?php include('Partials/footer.php') ?>


