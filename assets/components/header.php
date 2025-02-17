<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <nav class="bg-bs-color-0 navbar navbar-expand-lg bg-bs-color-0 p-2">
            <div class="container-fluid p-0 m-0">
                <a class="navbar-brand" href="?"><img
                        src="<?= (logo . "07827ff2-68a6-4dd1-acd3-4a346812c659-Photoroom.svg"); ?>" alt="logo"
                        height="50px" width="50px"></a>
                <button class="navbar-toggler border border-circle" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <svg width="25px" height="25px" class="icono-header-medium" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 5C7 6.10457 6.10457 7 5 7C3.89543 7 3 6.10457 3 5C3 3.89543 3.89543 3 5 3C6.10457 3 7 3.89543 7 5Z"
                            fill="#000000" />
                        <path
                            d="M14 5C14 6.10457 13.1046 7 12 7C10.8954 7 10 6.10457 10 5C10 3.89543 10.8954 3 12 3C13.1046 3 14 3.89543 14 5Z"
                            fill="#000000" />
                        <path
                            d="M19 7C20.1046 7 21 6.10457 21 5C21 3.89543 20.1046 3 19 3C17.8954 3 17 3.89543 17 5C17 6.10457 17.8954 7 19 7Z"
                            fill="#000000" />
                        <path
                            d="M7 12C7 13.1046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12Z"
                            fill="#000000" />
                        <path
                            d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z"
                            fill="#000000" />
                        <path
                            d="M21 12C21 13.1046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 12Z"
                            fill="#000000" />
                        <path
                            d="M5 21C6.10457 21 7 20.1046 7 19C7 17.8954 6.10457 17 5 17C3.89543 17 3 17.8954 3 19C3 20.1046 3.89543 21 5 21Z"
                            fill="#000000" />
                        <path
                            d="M14 19C14 20.1046 13.1046 21 12 21C10.8954 21 10 20.1046 10 19C10 17.8954 10.8954 17 12 17C13.1046 17 14 17.8954 14 19Z"
                            fill="#000000" />
                        <path
                            d="M19 21C20.1046 21 21 20.1046 21 19C21 17.8954 20.1046 17 19 17C17.8954 17 17 17.8954 17 19C17 20.1046 17.8954 21 19 21Z"
                            fill="#000000" />
                    </svg>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul
                        class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto gap-3 contenido-header border rounded-pill p-1 d-inline-flex">
                        <li class="nav-item d-inline-flex mx-auto">
                            <a class="nav-link text-center fs-6 rounded-pill px-3" aria-current="page"
                                href="?controller=product&action=menu">Menu</a>
                        </li>
                        <li class="nav-item d-inline-flex mx-auto">
                            <a class="nav-link text-center fs-6 rounded-pill px-3" aria-current="page" href="">Valores</a>
                        </li>
                        <li class="nav-item d-inline-flex mx-auto">
                            <a class="nav-link text-center fs-6 rounded-pill text-danger px-3" aria-current="page"
                                href="">Oferta</a>
                        </li>
                        <li class="nav-item d-inline-flex mx-auto">
                            <a class="nav-link enabled text-center fs-6 rounded-pill px-3" aria-current="page"
                                href="">Horarios</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav gap-3 gx-5">
                        <?php
    
                        if (isset($_SESSION["email"])) {
                            $email = $_SESSION["email"];
                            $name = $_SESSION["name"];
                            $surname = $_SESSION["surname"];
                            $is_admin = $_SESSION["is_admin"];
                            $iniciales = substr($name, 0, 1) . substr($surname, 0, 1);
                        ?>
                            <div class="d-flex flex-column">
                                <li class="nav-item dropdown">
                                    <div type="button" class="icono-header-medium" data-bs-toggle="collapse"
                                        data-bs-target="#collapsePerfil" aria-expanded="false" aria-controls="collapsePerfil">
                                        <div class="avatarH"><?= $iniciales ?></div>
                                    </div>
                                </li>
                                <div class="collapse bg-bs-color-white rounded collapse-card-user p-3 shadow"
                                    id="collapsePerfil">
                                    <div class="collaps-container mx-auto">
                                        <!-- datos del perfil -->
                                        <div class="profile-header d-flex gap-3">
                                            <div class="avatar"><?= $iniciales ?></div>
                                            <div class="tx-bs-color-black">
                                                <h5><?= $name . " " . $surname ?></h5>
                                                <p><?= $email ?></p>
                                            </div>
                                        </div>
                                        <!-- boton de favoritos -->
                                        <a class="d-flex gap-3 justify-content-start py-2 px-4 tx-bs-color-black text-decoration-none"
                                            href="?controller=profile&action=show_history_order">
                                            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10.5431 1.66549C11.4491 1.16212 12.5509 1.16212 13.4569 1.66549L21.4856 6.12589C21.8031 6.30225 22 6.63685 22 7C22 7.00002 22 6.99998 22 7V16.4116C22 17.1379 21.6062 17.8072 20.9713 18.1599L12.5015 22.8653C12.2067 23.0366 11.7933 23.0366 11.4985 22.8653L3.02871 18.1599C2.39378 17.8072 2 17.1379 2 16.4116V7.00005C2.00002 6.6369 2.19691 6.30225 2.51436 6.12589L10.5431 1.66549ZM12.4856 3.41381C12.1836 3.24602 11.8164 3.24602 11.5144 3.41381L9.55918 4.50002L16.5001 8.35606L18.9409 7.00005L12.4856 3.41381ZM5.05913 7.00005L7.50005 5.64397L14.4409 9.50002L12 10.8561L5.05913 7.00005ZM13 20.3005L20 16.4116V8.69956L13 12.5884V20.3005ZM4 8.69956L11 12.5884V20.3005L4 16.4116V8.69956Z"
                                                    fill="#000000" />
                                            </svg>
    
    
                                            <p>Mis pedidos</p>
                                        </a>
                                        <!-- boton de configuracion -->
                                        <a class="d-flex gap-3 justify-content-start py-2 px-4 tx-bs-color-black text-decoration-none"
                                            href="?controller=profile&action=show_profile">
                                            <svg fill="#000000" height="25px" width="25px" version="1.1" id="Icons"
                                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                viewBox="0 0 32 32" xml:space="preserve">
                                                <path d="M29,17.6c-1.2-0.4-2-1-2-1.6s0.8-1.3,2-1.6c0.5-0.2,0.8-0.7,0.7-1.2c-0.4-1.8-1-3.4-2.1-4.9c-0.3-0.4-0.8-0.6-1.3-0.3
                                                c-1.1,0.6-2.2,0.7-2.6,0.3c-0.4-0.4-0.3-1.5,0.3-2.6c0.2-0.5,0.1-1-0.3-1.3c-1.5-1-3.2-1.7-4.9-2.1c-0.5-0.1-1,0.2-1.2,0.7
                                                c-0.4,1.2-1,2-1.6,2s-1.3-0.8-1.6-2c-0.2-0.5-0.7-0.8-1.2-0.7c-1.8,0.4-3.4,1-4.9,2.1C7.8,4.6,7.7,5.2,7.9,5.6
                                                c0.6,1.1,0.7,2.2,0.3,2.6C7.8,8.6,6.8,8.5,5.6,7.9c-0.5-0.2-1-0.1-1.3,0.3c-1,1.5-1.7,3.2-2.1,4.9c-0.1,0.5,0.2,1,0.7,1.2
                                                c1.2,0.4,2,1,2,1.6s-0.8,1.3-2,1.6c-0.5,0.2-0.8,0.7-0.7,1.2c0.4,1.8,1,3.4,2.1,4.9c0.3,0.4,0.8,0.6,1.3,0.3
                                                c1.1-0.6,2.2-0.7,2.6-0.3c0.4,0.4,0.3,1.5-0.3,2.6c-0.2,0.5-0.1,1,0.3,1.3c1.5,1,3.2,1.7,4.9,2.1c0.5,0.1,1-0.2,1.2-0.7
                                                c0.4-1.2,1-2,1.6-2s1.3,0.8,1.6,2c0.1,0.4,0.5,0.7,1,0.7c0.1,0,0.1,0,0.2,0c1.8-0.4,3.4-1,4.9-2.1c0.4-0.3,0.6-0.8,0.3-1.3
                                                c-0.6-1.1-0.7-2.2-0.3-2.6c0.4-0.4,1.5-0.3,2.6,0.3c0.5,0.2,1,0.1,1.3-0.3c1-1.5,1.7-3.2,2.1-4.9C29.8,18.3,29.5,17.8,29,17.6z
                                                M16,23c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S19.9,23,16,23z" />
                                            </svg>
                                            <p>Configuracion de la Cuenta</p>
                                        </a>
                                        <?php if ($is_admin == 1){ ?>
                                        <a class="d-flex gap-3 justify-content-start py-2 px-4 tx-bs-color-black text-decoration-none"
                                            href="?controller=profile&action=admin_panel">
                                            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.17157 3.17157C3.92172 2.42143 4.93913 2 6 2C7.06087 2 8.07828 2.42143 8.82843 3.17157C9.57857 3.92172 10 4.93913 10 6V8H14V6C14 4.93913 14.4214 3.92172 15.1716 3.17157C15.9217 2.42143 16.9391 2 18 2C19.0609 2 20.0783 2.42143 20.8284 3.17157C21.5786 3.92172 22 4.93913 22 6C22 7.06087 21.5786 8.07828 20.8284 8.82843C20.0783 9.57857 19.0609 10 18 10H16V14H18C19.0609 14 20.0783 14.4214 20.8284 15.1716C21.5786 15.9217 22 16.9391 22 18C22 19.0609 21.5786 20.0783 20.8284 20.8284C20.0783 21.5786 19.0609 22 18 22C16.9391 22 15.9217 21.5786 15.1716 20.8284C14.4214 20.0783 14 19.0609 14 18V16H10V18C10 19.0609 9.57857 20.0783 8.82843 20.8284C8.07828 21.5786 7.06087 22 6 22C4.93913 22 3.92172 21.5786 3.17157 20.8284C2.42143 20.0783 2 19.0609 2 18C2 16.9391 2.42143 15.9217 3.17157 15.1716C3.92172 14.4214 4.93913 14 6 14H8V10H6C4.93913 10 3.92172 9.57857 3.17157 8.82843C2.42143 8.07828 2 7.06087 2 6C2 4.93913 2.42143 3.92172 3.17157 3.17157ZM8 8V6C8 5.46957 7.78929 4.96086 7.41421 4.58579C7.03914 4.21071 6.53043 4 6 4C5.46957 4 4.96086 4.21071 4.58579 4.58579C4.21071 4.96086 4 5.46957 4 6C4 6.53043 4.21071 7.03914 4.58579 7.41421C4.96086 7.78929 5.46957 8 6 8H8ZM10 10V14H14V10H10ZM8 16H6C5.46957 16 4.96086 16.2107 4.58579 16.5858C4.21071 16.9609 4 17.4696 4 18C4 18.5304 4.21071 19.0391 4.58579 19.4142C4.96086 19.7893 5.46957 20 6 20C6.53043 20 7.03914 19.7893 7.41421 19.4142C7.78929 19.0391 8 18.5304 8 18V16ZM16 16V18C16 18.5304 16.2107 19.0391 16.5858 19.4142C16.9609 19.7893 17.4696 20 18 20C18.5304 20 19.0391 19.7893 19.4142 19.4142C19.7893 19.0391 20 18.5304 20 18C20 17.4696 19.7893 16.9609 19.4142 16.5858C19.0391 16.2107 18.5304 16 18 16H16ZM16 8H18C18.5304 8 19.0391 7.78929 19.4142 7.41421C19.7893 7.03914 20 6.53043 20 6C20 5.46957 19.7893 4.96086 19.4142 4.58579C19.0391 4.21071 18.5304 4 18 4C17.4696 4 16.9609 4.21071 16.5858 4.58579C16.2107 4.96086 16 5.46957 16 6V8Z" fill="#000000" />
                                            </svg>
                                            <p>Admin panel</p>
                                        </a>
                                        <?php } ?>
                                        <hr class="tx-bs-color-3">
                                        <!-- boton de finalizar sesion -->
                                        <a type="button"
                                            class="logout py-3 px-5 text-center fw-semibold text-decoration-none tx-bs-color-black mx-auto"
                                            href="?controller=session&action=destroy_session">
                                            Finalizar sesión
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item dropdown">
                                <a href="?controller=home&action=login" class="icono-header-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 0 448 512">
                                        <path
                                            d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464l349.5 0c-8.9-63.3-63.3-112-129-112l-91.4 0c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3z" />
                                    </svg>
                                </a>
                            </li>
                        <?php
                        }
                        ?>
                        <li class="nav-item dropdown icono-header-medium">
                            <a href="?controller=cart&action=resume"
                                class="icono-header-medium d-flex text-decoration-none">
                                <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 0 576 512">
                                    <path
                                        d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                    <p class="bg-bs-color-5 border-cicle contador-cart" id="cart_product_count">
                                        <?= $contadorProductos; ?></p>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>