<?php 

$jsonFile = 'data.json';

    

if(file_exists($jsonFile)) {
    $applications = json_decode(file_get_contents($jsonFile), true);
}else {
    $applications = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications List</title>
</head>
<body>

<h2>All Applications</h2>

<?php if(empty($applications)) : ?>
    <p>No applications submitted yet.</p>

<?php else : ?>
    <ul>
        <?php foreach ($applications as $app) : ?>
            <li>
                <strong>Name: </strong> <?= htmlspecialchars($app['firstName']) ?> <br>
                <strong>Email: </strong> <?= htmlspecialchars($app['email']) ?> <br>
                <strong>Text: </strong> <?= nl2br(htmlspecialchars($app['text'])) ?> <br>
                <em>Sent at: <?= $app['sentAt'] ?></em>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
    
</body>
</html>