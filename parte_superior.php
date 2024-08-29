<!DOCTYPE html>
<html lang="English">

<head>
    <meta charset="utf-8">
    <meta name="proyecto III gen I" content="Pagina de prueba">
    <title>
       GAMESPACE Tu Tienda de confianza 
    </title>
    <link rel="stylesheet" href="./styles/main.css">
</head>


<menu>
 
<div class="barra">
        <div class="hamburguesa" id="hamburguesa">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul class="menu-horizontal" id="menu">
            <li>
                <a href="pagina2.html">Computadoras</a>
                <ul class="menu-vertical">
                    <li><a href="#">Laptop</a></li>
                    <li><a href="#">All in One</a></li>
                    <li><a href="#">Gamer</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Electrónicos</a>
                <ul class="menu-vertical">
                    <li><a href="#">Televisores</a></li>
                    <li><a href="#">Cámaras</a></li>
                    <li><a href="#">Consolas</a></li>
                    <li><a href="#">Celulares</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Periféricos</a>
                <ul class="menu-vertical">
                    <li><a href="#">Auriculares</a></li>
                    <li><a href="#">Teclados</a></li>
                    <li><a href="#">Ratones</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Software</a>
                <ul class="menu-vertical">
                    <li><a href="#">Sistemas Operativos</a></li>
                    <li><a href="#">Antivirus</a></li>
                    <li><a href="#">Videojuegos</a></li>
                </ul>
            </li>
        </ul>
        <div class="barra-login">
            <input type="text" id="search" placeholder="Buscar">
            


            <div id="cart">
                <h2>Carrito de Compras</h2>
                <ul id="cart-items"></ul>
                <p>Total: $<span id="cart-total">0</span></p>
                <button id="checkout">Comprar</button>
            </div>
            

        </div>
    </div>






    <div class="video-container">
        <video autoplay muted loop id="background-video">
            <source src="videos\nebula.1920x1080.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="content">

            <h1>GAME SPACE</h1>
            <p>Los Mejores Precios del pais</p>
        </div>
    </div>

    <div class="additional-content">
        <div class="slider" style="
            --width: 100px;
            --height: 50px;
            --quantity: 10;
        ">
            <div class="list">
                <div class="item" style="--position: 1"><img src="images/AMD_E_Wh_RGB25.jpg" alt=""></div>
                <div class="item" style="--position: 2"><img src="images/xiaomi-3.svg" alt=""></div>
                <div class="item" style="--position: 3"><img src="images/intel-6.svg" alt=""></div>
                <div class="item" style="--position: 4"><img src="images/corsair-2.svg" alt=""></div>
                <div class="item" style="--position: 5"><img src="images/logitech-2-1.svg" alt=""></div>
                <div class="item" style="--position: 6"><img src="images/microsoft-6.svg" alt=""></div>
                <div class="item" style="--position: 7"><img src="images/razer-1.svg" alt=""></div>
                <div class="item" style="--position: 8"><img src="images/redragon.svg" alt=""></div>
                <div class="item" style="--position: 9"><img src="images/jbl-2.svg" alt=""></div>
                <div class="item" style="--position: 10"><img src="images/msi-3.svg" alt=""></div>
            </div>
        </div>

    </div>
</menu>