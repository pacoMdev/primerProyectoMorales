<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
        session_start();
        $_SESSION["user_id"]="admin";
    ?>
    <nav class="bg-bs-color-0 navbar navbar-expand-lg bg-bs-color-0">
        <div class="container-fluid p-0 m-0">
            <a class="navbar-brand" href="?"><img src="<?= (logo."_07827ff2-68a6-4dd1-acd3-4a346812c659-Photoroom.png"); ?>" alt="logo" height="50px" width="50px"></a>
            <button class="navbar-toggler border border-circle" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <svg width="25px" height="25px" class="icono-header-medium" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 5C7 6.10457 6.10457 7 5 7C3.89543 7 3 6.10457 3 5C3 3.89543 3.89543 3 5 3C6.10457 3 7 3.89543 7 5Z" fill="#000000"/>
                <path d="M14 5C14 6.10457 13.1046 7 12 7C10.8954 7 10 6.10457 10 5C10 3.89543 10.8954 3 12 3C13.1046 3 14 3.89543 14 5Z" fill="#000000"/>
                <path d="M19 7C20.1046 7 21 6.10457 21 5C21 3.89543 20.1046 3 19 3C17.8954 3 17 3.89543 17 5C17 6.10457 17.8954 7 19 7Z" fill="#000000"/>
                <path d="M7 12C7 13.1046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12Z" fill="#000000"/>
                <path d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z" fill="#000000"/>
                <path d="M21 12C21 13.1046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 12Z" fill="#000000"/>
                <path d="M5 21C6.10457 21 7 20.1046 7 19C7 17.8954 6.10457 17 5 17C3.89543 17 3 17.8954 3 19C3 20.1046 3.89543 21 5 21Z" fill="#000000"/>
                <path d="M14 19C14 20.1046 13.1046 21 12 21C10.8954 21 10 20.1046 10 19C10 17.8954 10.8954 17 12 17C13.1046 17 14 17.8954 14 19Z" fill="#000000"/>
                <path d="M19 21C20.1046 21 21 20.1046 21 19C21 17.8954 20.1046 17 19 17C17.8954 17 17 17.8954 17 19C17 20.1046 17.8954 21 19 21Z" fill="#000000"/>
                </svg>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto gap-3 contenido-header border rounded-pill p-1">
                    <li class="nav-item">
                        <a class="nav-link text-center fs-6 rounded-pill" aria-current="page" href="?controller=product&action=menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center fs-6 rounded-pill" aria-current="page" href="">Valores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center fs-6 rounded-pill text-danger" aria-current="page" href="">Oferta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link enabled text-center fs-6 rounded-pill" aria-current="page" href="">Horarios</a>
                    </li>
                </ul>
                <ul class="navbar-nav gap-3 gx-5">
                    <?php 
                        if (isset($_SESSION["user_id"])){
                    ?>
                            <li class="nav-item dropdown">
                                <div type="button" class="icono-header-medium" data-bs-toggle="collapse" data-bs-target="#collapsePerfil" aria-expanded="false" aria-controls="collapsePerfil">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464l349.5 0c-8.9-63.3-63.3-112-129-112l-91.4 0c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3z"/></svg>
                                </div>
                            </li>
                            <div class="collapse" id="collapsePerfil">
                                <div>
                                    <div class=" d-flex gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
                                        <p>Tus favoritos</p>
                                    </div>
                                    <div class="d-flex gap-3">
                                        <svg fill="#000000" height="25px" width="25px" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                            viewBox="0 0 32 32" xml:space="preserve">
                                        <path d="M29,17.6c-1.2-0.4-2-1-2-1.6s0.8-1.3,2-1.6c0.5-0.2,0.8-0.7,0.7-1.2c-0.4-1.8-1-3.4-2.1-4.9c-0.3-0.4-0.8-0.6-1.3-0.3
                                            c-1.1,0.6-2.2,0.7-2.6,0.3c-0.4-0.4-0.3-1.5,0.3-2.6c0.2-0.5,0.1-1-0.3-1.3c-1.5-1-3.2-1.7-4.9-2.1c-0.5-0.1-1,0.2-1.2,0.7
                                            c-0.4,1.2-1,2-1.6,2s-1.3-0.8-1.6-2c-0.2-0.5-0.7-0.8-1.2-0.7c-1.8,0.4-3.4,1-4.9,2.1C7.8,4.6,7.7,5.2,7.9,5.6
                                            c0.6,1.1,0.7,2.2,0.3,2.6C7.8,8.6,6.8,8.5,5.6,7.9c-0.5-0.2-1-0.1-1.3,0.3c-1,1.5-1.7,3.2-2.1,4.9c-0.1,0.5,0.2,1,0.7,1.2
                                            c1.2,0.4,2,1,2,1.6s-0.8,1.3-2,1.6c-0.5,0.2-0.8,0.7-0.7,1.2c0.4,1.8,1,3.4,2.1,4.9c0.3,0.4,0.8,0.6,1.3,0.3
                                            c1.1-0.6,2.2-0.7,2.6-0.3c0.4,0.4,0.3,1.5-0.3,2.6c-0.2,0.5-0.1,1,0.3,1.3c1.5,1,3.2,1.7,4.9,2.1c0.5,0.1,1-0.2,1.2-0.7
                                            c0.4-1.2,1-2,1.6-2s1.3,0.8,1.6,2c0.1,0.4,0.5,0.7,1,0.7c0.1,0,0.1,0,0.2,0c1.8-0.4,3.4-1,4.9-2.1c0.4-0.3,0.6-0.8,0.3-1.3
                                            c-0.6-1.1-0.7-2.2-0.3-2.6c0.4-0.4,1.5-0.3,2.6,0.3c0.5,0.2,1,0.1,1.3-0.3c1-1.5,1.7-3.2,2.1-4.9C29.8,18.3,29.5,17.8,29,17.6z
                                            M16,23c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S19.9,23,16,23z"/>
                                        </svg>
                                        <p>Configuracion de la Cuenta</p>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }else{
                    ?>
                            <li class="nav-item dropdown">
                                <a href="?controller=home&action=login" class="icono-header-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464l349.5 0c-8.9-63.3-63.3-112-129-112l-91.4 0c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3z"/></svg>
                                </a>
                            </li>
                    <?php
                        }
                    ?>
                    <li class="nav-item dropdown icono-header-medium">
                        <a href="?controller=cart&action=resume" class="icono-header-medium d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                            <p class="bg-bs-color-5 border-cicle contador-cart">0</p>
                        </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>