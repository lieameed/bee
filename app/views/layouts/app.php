<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">

</head>

<body class="bg-gray-100 min-h-screen min-w-screen flex flex-col grow">

    <?php require_once '../app/views/layouts/partials/header.php' ?>

    <div class="p-4 grow">
        <main class="mx-auto space-y-2">
            <?php require_once $content ?>
        </main>
    </div>


    <?php require_once '../app/views/layouts/partials/footer.php' ?>

</body>

</html>