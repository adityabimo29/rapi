<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimodev</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="<?= base_url('css/style.css'); ?>" rel="stylesheet" type="text/css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <!-- ======= Navigation ======= -->
    <nav class="main-navigation">
        <a href="">
            <img src="https://cakephp.org/img/cake-logo.svg" alt="">
        </a>
        <div class="toggle-bar">
            <span class="icon-toggle"><i class='bx bx-menu' ></i></span>
        </div>
        <ul class="menu">
            <li>
                <a href="<?=base_url()?>">Home</a>
            </li>
            <li>
                <a href="#">Blog</a>
                <i class='bx bxs-chevron-down'></i>
                <ul class="submenu">
                    <li class="">
                        <a href="#"><i class='bx bxs-chevron-right'></i>Vue JS</a>
                    </li>
                    <li class="">
                        <a href="#"><i class='bx bxs-chevron-right'></i>React JS</a>
                    </li>
                    <li class="">
                        <a href="#"><i class='bx bxs-chevron-right'></i>React Native</a>
                    </li>
                    <li class="">
                        <a href="#"><i class='bx bxs-chevron-right'></i>Next JS</a>
                    </li>
                    <li class="">
                        <a href="#"><i class='bx bxs-chevron-right'></i>Codeigniter</a>
                    </li>
                    <li class="">
                        <a href="#"><i class='bx bxs-chevron-right'></i>Laravel</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact Me</a>
            </li>
        </ul>
    </nav>

    <?=$this->renderSection('content')?>

    <script>
        // Show Navigation on Mobile
        let navMobile = document.querySelector(".toggle-bar");
        navMobile.addEventListener("click",() => {
            let menu        = document.querySelector(".menu");
            let iconToggle  = document.querySelector(".icon-toggle");
            let icon        = iconToggle.firstElementChild;

            if (icon.classList.contains('bx-menu')) {
                icon.classList.remove('bx-menu');
                menu.classList.add("show");
                icon.classList.add('bx-x');
            }else{
                icon.classList.remove('bx-x');
                menu.classList.remove("show");
                icon.classList.add('bx-menu');
            }

        });
    </script>
</body>

</html>