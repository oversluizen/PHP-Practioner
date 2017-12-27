<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <ul>
            <li><a href="/about">About page</a></li>
            <li><a href="/contact">Contact page</a></li>
        </ul>

        <h1>My Tasks</h1>
        <ul>
            <?php foreach ($tasks as $task) : ?>
                <li>
                    <?php if ($task->completed) : ?>
                        <strike><?= $task->description; ?> </strike>
                    <?php else : ?>
                        <?= $task->description; ?> 
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
    </ul>
    </body>
</html>