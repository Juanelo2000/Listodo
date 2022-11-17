@section('content')
    <div>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bree+Serif&family=EB+Garamond:ital,wght@0,500;1,800&display=swap');

            #container {
                box-shadow: 0 15px 30px 1px grey;
                background: rgba(255, 255, 255, 0.90);
                text-align: center;
                border-radius: 5px;
                overflow: hidden;
                margin: 5em auto;
                height: 300px;
                width: 500px;


            }



            .product-details {
                position: relative;
                text-align: left;
                overflow: hidden;
                padding: 10px;
                height: 100%;
                float: left;
                width: 50%;

            }

            #container .product-details h1 {
                font-family: 'Bebas Neue', cursive;
                display: inline-block;
                position: relative;
                font-size: 20px;
                color: #344055;
                margin: 0;

            }

            #container .product-details h1:before {
                position: absolute;
                content: '';
                right: 0%;
                top: 0%;
                transform: translate(25px, -15px);
                font-family: 'Bree Serif', serif;
                display: inline-block;
                background: #ffe6e6;
                border-radius: 5px;
                font-size: 14px;
                padding: 5px;
                color: white;
                margin: 0;
                animation: chan-sh 6s ease infinite;

            }






            .hint-star {
                display: inline-block;
                margin-left: 0.5em;
                color: gold;
                width: 100%;
            }


            #container .product-details>p {
                font-family: 'EB Garamond', serif;
                text-align: center;
                font-size: 15px;
                color: #7d7d7d;

            }

            .control {
                position: relative;
                width: 111%;
                display: flex;
                justify-content: center;
                bottom: -46px;
            }

            .btn {

                transform: translateY(0px);
                transition: 0.3s linear;
                background: #809fff;
                border-radius: 5px;
                position: relative;
                overflow: hidden;
                cursor: pointer;
                outline: none;
                border: none;
                color: #eee;
                padding: 0;
                margin: 0;

            }

            .btn:hover {
                transform: translateY(-6px);
                background: #1a66ff;
            }

            .btn span {
                font-family: 'Farsan', cursive;
                transition: transform 0.3s;
                display: inline-block;
                padding: 10px 20px;
                font-size: 15px;
                margin: 0;

            }

            .btn .price,
            .shopping-cart {
                background: #333;
                border: 0;
                margin: 0;
            }

            .btn .price {
                transform: translateX(-10%);
                padding-right: 15px;
            }

            .btn .shopping-cart {
                transform: translateX(-100%);
                position: absolute;
                background: #333;
                z-index: 1;
                left: 0;
                top: 0;
            }

            .btn .buy {
                z-index: 3;
                font-weight: bolder;
            }

            .btn:hover .price {
                transform: translateX(-110%);
            }

            .btn:hover .shopping-cart {
                transform: translateX(0%);
                color: white;
            }



            .product-image {
                transition: all 0.3s ease-out;
                display: inline-block;
                position: relative;
                overflow: hidden;
                height: 100%;
                float: right;
                width: 45%;
                display: inline-block;
            }

            #container img {
                width: 100%;
                height: 100%;
            }

            .info {
                background: rgba(27, 26, 26, 0.9);
                font-family: 'Bree Serif', serif;
                transition: all 0.3s ease-out;
                transform: translateX(-100%);
                position: absolute;
                line-height: 1.8;
                text-align: left;
                font-size: 105%;
                color: #FFF;
                height: 100%;
                padding: 10px;
                width: 100%;
                left: 0;
                top: 0;
            }

            .info h2 {
                text-align: center
            }

            .product-image:hover .info {
                transform: translateX(0);
            }

            .product-image:hover img {
                transition: all 0.3s ease-out;
            }

            .product-image:hover img {
                transform: scale(1.2, 1.2);
            }

            .productos {
                padding-left: 200px;
                padding-right: 200px;
            }

            .row {
                --bs-gutter-x: 0 !important;
            }
        </style>
        <div class="row productos">
            <div class="col-md-4">
                <div id="container">
                    <div class="product-details">
                        <h1>LAVAMANOS Y MUEBLES DE BAÑO</h1>
                        <span class="hint-star star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                        <p class="information">"El mueble es el complemento ideal que le brindará a tu baño el toque de
                            calidez, elegancia y funcionalidad.
                            Te proponemos diversidad de acabados, medidas y diseños modernos.</p>
                        <div class="control">
                            <button class="btn">
                                <span class="price">$250</span>
                                <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                <span class="buy">Añadir al carrito</span>
                            </button>
                        </div>
                    </div>
                    <div class="product-image">
                        <img src="3.jpg" alt="">
                        <div class="info">
                            <h2> Description</h2>
                            <ul>
                                <li><strong>Height : </strong>5 Ft </li>
                                <li><strong>Shade : </strong>Olive green</li>
                                <li><strong>Decoration: </strong>balls and bells</li>
                                <li><strong>Material: </strong>Eco-Friendly</li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div id="container">
                    <div class="product-details">
                        <h1>CHRISTMAS TREE</h1>
                        <span class="hint-star star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </span>
                        <p class="information">" Let's spread the joy , here is Christmas , the most awaited day of the
                            year.Christmas Tree is what one need the most. Here is the correct tree which will enhance your
                            Christmas.</p>
                        <div class="control">
                            <button class="btn">
                                <span class="price">$250</span>
                                <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                <span class="buy">Añadir al carrito</span>
                            </button>
                        </div>
                    </div>
                    <div class="product-image">
                        <img src="4.jpg" alt="">
                        <div class="info">
                            <h2> Description</h2>
                            <ul>
                                <li><strong>Height : </strong>5 Ft </li>
                                <li><strong>Shade : </strong>Olive green</li>
                                <li><strong>Decoration: </strong>balls and bells</li>
                                <li><strong>Material: </strong>Eco-Friendly</li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div id="container">
                    <div class="product-details">
                        <h1>CHRISTMAS TREE</h1>
                        <span class="hint-star star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </span>
                        <p class="information">" Let's spread the joy , here is Christmas , the most awaited day of the
                            year.Christmas Tree is what one need the most. Here is the correct tree which will enhance your
                            Christmas.</p>
                        <div class="control">
                            <button class="btn">
                                <span class="price">$250</span>
                                <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                <span class="buy">Get now</span>
                            </button>
                        </div>
                    </div>
                    <div class="product-image">
                        <img src="5.jpg" alt="">
                        <div class="info">
                            <h2> Description</h2>
                            <ul>
                                <li><strong>Height : </strong>5 Ft </li>
                                <li><strong>Shade : </strong>Olive green</li>
                                <li><strong>Decoration: </strong>balls and bells</li>
                                <li><strong>Material: </strong>Eco-Friendly</li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="row productos">
            <div class="col-md-4">
                <div id="container">
                    <div class="product-details">
                        <h1>CHRISTMAS TREE</h1>
                        <span class="hint-star star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </span>
                        <p class="information">" Let's spread the joy , here is Christmas , the most awaited day of the
                            year.Christmas Tree is what one need the most. Here is the correct tree which will enhance your
                            Christmas.</p>
                        <div class="control">
                            <button class="btn">
                                <span class="price">$250</span>
                                <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                <span class="buy">Get now</span>
                            </button>
                        </div>
                    </div>
                    <div class="product-image">
                        <img src="1.jpg" alt="">
                        <div class="info">
                            <h2> Description</h2>
                            <ul>
                                <li><strong>Height : </strong>5 Ft </li>
                                <li><strong>Shade : </strong>Olive green</li>
                                <li><strong>Decoration: </strong>balls and bells</li>
                                <li><strong>Material: </strong>Eco-Friendly</li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div id="container">
                    <div class="product-details">
                        <h1>CHRISTMAS TREE</h1>
                        <span class="hint-star star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </span>
                        <p class="information">" Let's spread the joy , here is Christmas , the most awaited day of the
                            year.Christmas Tree is what one need the most. Here is the correct tree which will enhance your
                            Christmas.</p>
                        <div class="control">
                            <button class="btn">
                                <span class="price">$250</span>
                                <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                <span class="buy">Añadir al carrito</span>
                            </button>
                        </div>
                    </div>
                    <div class="product-image">
                        <img src="2.jpg" alt="">
                        <div class="info">
                            <h2> Description</h2>
                            <ul>
                                <li><strong>Height : </strong>5 Ft </li>
                                <li><strong>Shade : </strong>Olive green</li>
                                <li><strong>Decoration: </strong>balls and bells</li>
                                <li><strong>Material: </strong>Eco-Friendly</li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div id="container">
                    <div class="product-details">
                        <h1>CHRISTMAS TREE</h1>
                        <span class="hint-star star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </span>
                        <p class="information">" Let's spread the joy , here is Christmas , the most awaited day of the
                            year.Christmas Tree is what one need the most. Here is the correct tree which will enhance your
                            Christmas.</p>
                        <div class="control">
                            <button class="btn">
                                <span class="price">$250</span>
                                <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                <span class="buy">Get now</span>
                            </button>
                        </div>
                    </div>
                    <div class="product-image">
                        <img src="6.jpg" alt="">
                        <div class="info">
                            <h2> Description</h2>
                            <ul>
                                <li><strong>Height : </strong>5 Ft </li>
                                <li><strong>Shade : </strong>Olive green</li>
                                <li><strong>Decoration: </strong>balls and bells</li>
                                <li><strong>Material: </strong>Eco-Friendly</li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="row productos">
            <div class="col-md-4">
                <div id="container">
                    <div class="product-details">
                        <h1>CHRISTMAS TREE</h1>
                        <span class="hint-star star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </span>
                        <p class="information">" Let's spread the joy , here is Christmas , the most awaited day of the
                            year.Christmas Tree is what one need the most. Here is the correct tree which will enhance your
                            Christmas.</p>
                        <div class="control">
                            <button class="btn">
                                <span class="price">$250</span>
                                <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                <span class="buy">Get now</span>
                            </button>
                        </div>
                    </div>
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1606830733744-0ad778449672?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fGNocmlzdG1hcyUyMHRyZWV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                        <div class="info">
                            <h2> Description</h2>
                            <ul>
                                <li><strong>Height : </strong>5 Ft </li>
                                <li><strong>Shade : </strong>Olive green</li>
                                <li><strong>Decoration: </strong>balls and bells</li>
                                <li><strong>Material: </strong>Eco-Friendly</li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div id="container">
                    <div class="product-details">
                        <h1>CHRISTMAS TREE</h1>
                        <span class="hint-star star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </span>
                        <p class="information">" Let's spread the joy , here is Christmas , the most awaited day of the
                            year.Christmas Tree is what one need the most. Here is the correct tree which will enhance your
                            Christmas.</p>
                        <div class="control">
                            <button class="btn">
                                <span class="price">$250</span>
                                <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                <span class="buy">Añadir al carrito</span>
                            </button>
                        </div>
                    </div>
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1606830733744-0ad778449672?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fGNocmlzdG1hcyUyMHRyZWV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                        <div class="info">
                            <h2> Description</h2>
                            <ul>
                                <li><strong>Height : </strong>5 Ft </li>
                                <li><strong>Shade : </strong>Olive green</li>
                                <li><strong>Decoration: </strong>balls and bells</li>
                                <li><strong>Material: </strong>Eco-Friendly</li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div id="container">
                    <div class="product-details">
                        <h1>CHRISTMAS TREE</h1>
                        <span class="hint-star star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </span>
                        <p class="information">" Let's spread the joy , here is Christmas , the most awaited day of the
                            year.Christmas Tree is what one need the most. Here is the correct tree which will enhance your
                            Christmas.</p>
                        <div class="control">
                            <button class="btn">
                                <span class="price">$250</span>
                                <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                <span class="buy">Get now</span>
                            </button>
                        </div>
                    </div>
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1606830733744-0ad778449672?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fGNocmlzdG1hcyUyMHRyZWV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                        <div class="info">
                            <h2> Description</h2>
                            <ul>
                                <li><strong>Height : </strong>5 Ft </li>
                                <li><strong>Shade : </strong>Olive green</li>
                                <li><strong>Decoration: </strong>balls and bells</li>
                                <li><strong>Material: </strong>Eco-Friendly</li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </div>
@endsection
