<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting</title>
</head>
<body>
    <h1><?php
        $hour = date('H');
        if ($hour < 12) {
            echo 'Good morning, visitor!';
        } elseif ($hour < 18) {
            echo 'Good afternoon, visitor!';
        } else {
            echo 'Good evening, visitor!';
        }
    ?></h1>
    <p>Welcome to our website.</p>
</body>
</html>