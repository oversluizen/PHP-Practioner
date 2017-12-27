<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        
        <h1>Task for the day</h1>
            <ul>
                <li>
                    <strong>Name: </strong> <?=$task['title']; ?>
                </li>
                <li>
                    <strong>Due date: </strong> <?= $task['due']; ?>
                </li>
                <li>
                    <strong>Person responsible: </strong><?= $task['assigned_to']?>
                </li>
                <li>
                    <strong>Status: </strong><?= $task['completed'] ? 'Complete' : 'Incomplete' ?>
                </li>
            </ul>
    </body>
</html>
