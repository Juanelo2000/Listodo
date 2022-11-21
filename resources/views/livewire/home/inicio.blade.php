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
            color: white;
        }

        .navbar .carito_compra:hover {
            background: white !important;
            color: black !important;
            cursor: pointer;
        }

        .navbar .active {
            background: #a42335 !important;
            color: white;
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

        .paginas {
            min-height: 800px;
        }


        /////////////////////////////////////////////////////////////
        body {
            font-family: system-ui;
        }

        header {
            background-color: #e4e4e8;
            padding-top: 18px;
            padding-bottom: 18px;
            box-shadow: 0 7px 8px -3px grey;
            position: fixed;
            width: 100%;
            margin-top: -10px;
            z-index: 99;
        }

        .container {
            max-width: 1200px;
            text-align: center;
            margin: auto;
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            margin: auto;
            align-items: center;
            position: relative;
        }

        .header-section div {
            position: relative;
        }

        .header-section p {
            position: absolute;
            top: -7px;
            right: -24px;
            background-color: #fff;
            padding: 1px 6px;
            border-radius: 50%;
            color: red;
            font-weight: 700;
            font-family: system-ui;
            line-height: 18px;
        }

        .logo {
            width: 210px;
            height: 50px;
            cursor: pointer;
        }

        .logo_final {
            width: 164px;
            height: 84px;
            cursor: pointer;
        }

        .cart {
            width: 39px;
            height: 38px;
        }

        .cart-products {
            position: absolute !important;
            top: 43px;
            right: 23px;
            background-color: #fff;
            padding: 0 18px;
            box-shadow: 0 3px 10px rgb(0 0 0 / 20%);
            display: none;

            min-width: 290px;
        }

        .cart:hover {
            margin-bottom: 16px;
            transition-duration: .5s;
        }

        /*end header*/
        .products {
            padding-top: 170px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .carts {
            max-width: 250px;
            box-shadow: 0 3px 10px rgb(0 0 0 / 20%);
            padding-bottom: 34px;
            margin-bottom: 40px;
        }

        .carts img {
            width: 100%;
        }

        .carts p {
            font-family: system-ui;
            font-weight: 500;
            padding: 0 20px;
            margin-bottom: 24px;
        }

        .carts div p {
            position: absolute;
            top: 0;
            right: 0px;
            background-color: red;
            color: #fff;
            padding: 2px 7px 4px 21px;
            clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 25% 100%, 0% 50%);
        }

        .carts div {
            position: relative;
        }

        .carts a {
            font-family: system-ui;
            text-decoration: none;
            background: red;
            padding: 9px 23px;
            color: #fff;
            font-size: 17px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .carts a:hover {
            background: #fff;
            color: red;
            border: solid 2px red;
            transition-duration: .3s;
        }

        /*float cart*/
        .cart-products .item img {
            width: 115px;
        }

        .cart-products .item {
            display: flex;
            align-items: center;
        }

        .cart-products .item .item-content {
            margin: 0 5px;
            width: 201px;
        }

        .cart-products .item .item-content h5 {
            margin: 0;
            text-align: left;
            font-size: 12px;
            font-weight: 400;
            font-family: system-ui;
        }

        .cart-products .item .item-content h6 {
            margin: 0;
            font-size: 9px;
            font-weight: 400;
            font-family: system-ui;
        }

        .cart-products .item span {
            background-color: gray;
            padding: 0px 4px;
            border-radius: 50%;
            color: #fff;
            font-family: system-ui;
            cursor: pointer;
            font-size: 10px;
        }

        .cart-products h3 {
            margin-bottom: 0;
        }

        .cart-products .item .item-content h5.cart-price {
            font-weight: 500;
        }

        /*stye to btn close*/
        p.close-btn {
            top: 7px;
            right: 7px;
            cursor: pointer;
            color: #000;
        }

        p.author {
            display: flex;
            justify-content: center;
            FONT-VARIANT: JIS04;
            margin-top: 3%;
            gap: 7px;
        }

        p.author a {
            text-decoration: none;
            font-weight: 700;
            color: #000;
        }
    </style>
    <div>
        <div class="head ">

            <div class="logo me-5 d-flex justify-content-center">
                <a href="inicio"><img src="logo.png" alt=""></a>
            </div>

            <nav class="navbar">
                <a class=" me-1 {{ Request::is('inicio') ? 'active' : '' }}" href="inicio">Inicio</a>
                <a class="me-1 {{ Request::is('productos') ? 'active' : '' }}" href="productos">Productos</a>
                <a class="me-1 {{ Request::is('nosotros') ? 'active' : '' }}" href="nosotros">Nosotros</a>
                <a class="me-1 {{ Request::is('contacto') ? 'active' : '' }}" href="#">Contacto</a>
                <a class="carito_compra">
                    <div class="header-section container">
                        <div>
                            <i onclick="showCart(this) " class="fa-solid fa-cart-shopping fa-lg"></i>
                            <p class="count-product">0</p>

                        </div>
                        <div class="cart-products p-3" style="border-radius:6px " id="products-id">
                            <p class="close-btn" onclick="closeBtn()">X</p>
                            <h3 class="mb-3"><strong>Mi carrito</strong></h3>
                            <div class="card-items">
                                <div class="item">
                                    <img src="5.jpg" alt="">
                                    <div class="item-content">
                                        <h5 class="mb-1">name of product </h5>
                                        <h5 class="cart-price mb-1">45.50$</h5>
                                        <h6 class="text-start">Cantidad: 3</h6>
                                    </div>
                                    <span>x</span>
                                </div>    
                                <hr class="mt-1 mb-1">
                                <div class="item">
                                    <img src="1.jpg" alt="">
                                    <div class="item-content">
                                        <h5 class="mb-1">name of product </h5>
                                        <h5 class="cart-price mb-1">45.50$</h5>
                                        <h6 class="text-start">Cantidad: 3</h6>
                                    </div>
                                    <span class="delete-product" data-id="">x</span>
                                </div>
                            </div>
                            <hr class="mt-1 mb-3">

                            <div class="row d-flex"><h6 class="text-start" style="width:170px"  ><strong>Total:</strong> 1000$</h6><button class="btn" onclick="window.location.href='/carro_compras'" style="width:80px">Ir a pagar</button></div>
                            

                        </div>
                    </div>
                </a>
            </nav>
            <div class="logo_final ms-5 mt-3 d-flex justify-content-center">
                <a href=""><img src="logo 2.jpg" alt=""></a>
            </div>
        </div>
        <main role="main" class="paginas">
            @yield('content')
        </main>
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
                        <ul class="d-flex justify-content-center">
                            <li><a href="https://www.facebook.com/Listodo-Corona-330724520347569/" target="_blank"
                                    class="fa-brands fa-facebook fa-2x me-2"></a></li>
                            <li><a href="https://www.instagram.com/listodo_co/" target="_blank"
                                    class="fa-brands fa-instagram fa-2x"></a></li>

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
    <script>
        function showCart(x) {
            document.getElementById("products-id").style.display = "block";
        }

        function closeBtn() {
            document.getElementById("products-id").style.display = "none";
        }

        let allContainerCart = document.querySelector('.products');
        let containerBuyCart = document.querySelector('.card-items');
        let priceTotal = document.querySelector('.price-total')
        let amountProduct = document.querySelector('.count-product');


        let buyThings = [];
        let totalCard = 0;
        let countProduct = 0;

        //functions
        loadEventListenrs();

        function loadEventListenrs() {
            allContainerCart.addEventListener('click', addProduct);
            containerBuyCart.addEventListener('click', deleteProduct);
        }

        function addProduct(e) {
            e.preventDefault();
            if (e.target.classList.contains('btn-add-cart')) {
                const selectProduct = e.target.parentElement;
                readTheContent(selectProduct);
            }
        }

        function deleteProduct(e) {
            if (e.target.classList.contains('delete-product')) {
                const deleteId = e.target.getAttribute('data-id');

                buyThings.forEach(value => {
                    if (value.id == deleteId) {
                        let priceReduce = parseFloat(value.price) * parseFloat(value.amount);
                        totalCard = totalCard - priceReduce;
                        totalCard = totalCard.toFixed(2);
                    }
                });
                buyThings = buyThings.filter(product => product.id !== deleteId);

                countProduct--;
            }
            //FIX: El contador se quedaba con "1" aunque ubiera 0 productos
            if (buyThings.length === 0) {
                priceTotal.innerHTML = 0;
                amountProduct.innerHTML = 0;
            }
            loadHtml();
        }

        function readTheContent(product) {
            const infoProduct = {
                image: product.querySelector('div img').src,
                title: product.querySelector('.title').textContent,
                price: product.querySelector('div p span').textContent,
                id: product.querySelector('a').getAttribute('data-id'),
                amount: 1
            }

            totalCard = parseFloat(totalCard) + parseFloat(infoProduct.price);
            totalCard = totalCard.toFixed(2);

            const exist = buyThings.some(product => product.id === infoProduct.id);
            if (exist) {
                const pro = buyThings.map(product => {
                    if (product.id === infoProduct.id) {
                        product.amount++;
                        return product;
                    } else {
                        return product
                    }
                });
                buyThings = [...pro];
            } else {
                buyThings = [...buyThings, infoProduct]
                countProduct++;
            }
            loadHtml();
            //console.log(infoProduct);
        }

        function loadHtml() {
            clearHtml();
            buyThings.forEach(product => {
                const {
                    image,
                    title,
                    price,
                    amount,
                    id
                } = product;
                const row = document.createElement('div');
                row.classList.add('item');
                row.innerHTML = `
            <img src="${image}" alt="">
            <div class="item-content">
                <h5>${title}</h5>
                <h5 class="cart-price">${price}$</h5>
                <h6>Amount: ${amount}</h6>
            </div>
            <span class="delete-product" data-id="${id}">X</span>
        `;

                containerBuyCart.appendChild(row);

                priceTotal.innerHTML = totalCard;

                amountProduct.innerHTML = countProduct;
            });
        }

        function clearHtml() {
            containerBuyCart.innerHTML = '';
        }
    </script>
</div>
