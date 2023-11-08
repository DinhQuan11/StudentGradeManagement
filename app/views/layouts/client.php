<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
</head>

<body>
    <?php $this->render('components/header'); ?>
    <?php $this->render($content, $sub_content); ?>
    <?php $this->render('components/footer'); ?>
    <script src="/public/assets/js/main.js"></script>
</body>

</html>