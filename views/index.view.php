<?php require ('partials/head.php'); ?>

<?php foreach ($users as $user ) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<h1>Submit your name</h1>

<form action="/names" method="post">
    <input name="name"></input>
    <button type="submit">Submit</button>
</form>

<?php require ('partials/footer.php'); ?>