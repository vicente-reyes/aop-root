<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?= $this->include('include/link') ?>    
</head>
<body>
    
    <?= $this->include('include/header') ?>

    <?= $this->include('include/section/hero') ?>

    <main id="main">

    <?= $this->include('include/section/services') ?>

    </main>
    
    <?= $this->include('include/footer') ?>

    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

    <?= $this->include('include/js') ?>

</body>
</html>