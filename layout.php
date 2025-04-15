<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'My Website' ?></title>
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
    <header>
        <h1><?= $header ?? 'Welcome!' ?></h1>
    </header>

    <main>
        <?= $slot ?? '' ?>
    </main>

    <footer>
        <p>© <?= date('Y') ?> My Website</p>
    </footer>
</body>
</html>
