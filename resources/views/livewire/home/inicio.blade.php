<div>
    <style>
        * {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            vertical-align: baseline;
        }

        body {
            text-align: center;
            font-family: sans-serif;
        }

        .head {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 120px;
            background: white;
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 100;
        }

        .navbar {
            display: flex;
        }

 

        .logo a {
            text-decoration: none;
            color: #fff;
            text-transform: uppercase;
            font-size: 20px;
        }

        .navbar a {
            display: block;
            padding: 20px 20px;
            font-family: "Unica One";
            color: #000;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 20px;
            height: 100%;
        }

        .navbar a:hover {
            background: #a42335;
            color:white;
        }

        .header {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .header {
            height: 60vh !important;
            background: url(img/header.jpg) no-repeat center;
            background-size: cover;
        }

        .title {
            margin-bottom: 40px;
            font-size: 60px;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
        }
        .page-footer {
            /* display: flex;
            position: sticky;
            bottom:0px; */
            background-color: #232323;
            color: white;
            padding: 20px 0;
        }

        a {
            height: 100%;
        }
        .paginas{
            min-height:800px;
        }
    </style>
    <div>
        <div class="head mb-5">

            <div class="logo me-5 d-flex justify-content-center">
                <a href="home"><img src="logo.png" alt=""></a>
            </div>

            <nav class="navbar">
                <a href="#">Inicio</a>
                <a href="productos">Productos</a>
                <a href="#">Precio</a>
                <a href="/nosotros">Nosotros</a>
                <a href="#">Contacto</a>
            </nav>
            <div class="logo ms-5 mt-3 d-flex justify-content-center" >
                <a href=""><img src="logo 2.jpg" alt=""></a>
            </div>

        </div>
        <main role="main" class="paginas">
            @yield('content')
        </main>
        {{-- <header class="content header">
            <h2 class="title">Inicio</h2>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Ipsam necessitatibus odio quisquam reprehenderit quas,
                obcaecati, harum hic molestiae sequi ipsa nihil id tempore explicabo
                libero vero quia asperiores similique dicta.
            </p>

            <div class="btn-home">
                <a href="#" class="btn">Saber mas</a>
                <a href="#" class="btn">Saber mas</a>
            </div>
        </header>

        <section class="content price">

            <article class="contain">
                <h2 class="title">Precio</h2>
                <p>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Ut soluta similique
                    quia reprehenderit eligendi aliquam. Sit
                    odio impedit quibusdam. Velit corporis,
                    optio debitis quidem ex ipsam rerum dolorem autem sequi.
                </p>

                <a href="#" class="btn">Saber precio</a>

            </article>

        </section>

        <section class="content contact">
            <h2 class="title">Contacto</h2>
            <p>48481548</p>
            <figure class="map">
                <img src="img/mapa.png" height="220px" width="100%" alt="mapa">
            </figure>
        </section> --}}
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="contact-info  text-center text-md-left">
                            <address>
                                PBX: (+57) 601 614 8000<br>
                                Cel. (+57) 320 3502680 <br>
                                AUTOPISTA NORTE N° 131 - 65 (ESQUINA) <br>
                                BOGOTÁ - COLOMBIA <br>
                                servicioalcliente@listodo.com.co </address>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <ul class="inline-list">
                            <li><a href="https://www.facebook.com/Listodo-Corona-330724520347569/" target="_blank"
                                    class="fa-brands fa-facebook"></a></li>
                            <li><a href="https://www.instagram.com/listodo_co/" target="_blank"
                                    class="fa-instagram "></a></li>
                                    
                        </ul>
                    </div>
                    <div class="col-md-4 text-center text-md-right">
                        <p class="copyright">
                            © <span id="copyright-year">2022</span>
                            Listodo
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    </div>
</div>
