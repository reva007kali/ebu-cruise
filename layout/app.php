<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title?> | EBU-Cruise</title>
    <link href="src/output.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- icon web -->
    <link rel="icon" type="image/png" sizes="32x32" href="public/img/logo/favicon.png">

    <!-- our css -->
    <link rel="stylesheet" href="src/styles.css">

    <!-- swipper CDN -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />


    <!-- icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- aphine js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="font-display antialiased">
    <!-- navbar  -->
     <?php
     include 'components/navigation.php'
      ?>
    <!-- navbar  -->
    <main>
        <?= $content ?>
    </main>

    <?php include 'components/footer.php' ?>

    <!-- feather icons -->
    <script>
        feather.replace();
    </script>
    <!-- feather icons -->

    <!-- swipper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script/script.js"></script>

    <script src="node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>