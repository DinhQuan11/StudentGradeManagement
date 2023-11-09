<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (!empty($page_title)) ? $page_title : 'Trang chủ' ?></title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
</head>

<body>
    <?php
    $this->render('components/header');
    $this->render($content, $sub_content);
    $this->render('components/footer');
    ?>
    <script src="/public/assets/js/main.js"></script>
</body>

</html>