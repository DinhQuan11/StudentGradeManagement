</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/home.css" />
</head>

<body>
    <div class="container-fluid">
        <?php include_once './components/header.html' ?>
        <div class="row mt-68">
            <div class="col-2">
                <?php include_once './components/navbar.html' ?>
            </div>
            <div class="col-10">
                <div class="home">
                    <div class="home__logo">
                        <img src="/assets/imgs/logo.svg" alt="Logo" class="home__logo-img" />
                        <span class="home__logo-name">SGM</span>
                    </div>
                    <span class="home__description">Hệ thống quản lý điểm học sinh</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>