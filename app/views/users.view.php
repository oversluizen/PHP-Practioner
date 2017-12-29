<?php require ('partials/head.php'); ?>

<h1>All Users</h1>
<?php foreach ($users as $user ) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<h1>Submit your name</h1>

<form action="/users" method="post">
    <input name="name"></input>
    <button type="submit">Submit</button>
</form>

<?php require ('partials/footer.php'); ?>