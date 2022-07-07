<body>

    <div class="container">

        <header>

            <nav>

                <div class="nav-container">

                    <a href="index.html">

                        <img src="assets/image/logo.jpg" alt="Logo da empresa" width="100px" height="100px" id="logo">

                    </a>

                    <ul>

                        <li><a href="#">Categorias</a></li>
                        <li><a href="#">Contato</a></li>
                        <li><a href="#">Suporte</a></li>
                        <li><a href="#">Inicio</a></li>

                    </ul>

                </div>

            </nav>

        </header>

    </div>

<?php
include "pesquisar.php"
?>


    <div id='busca'>
        <form action="pesquisar.php" class="search" method="post">
            <input id="txtbusca"  type="text" name="pesquisar" placeholder="O que procura?" />
            <input id="btnBusca" type="submit" value="enviar" name="enviar" />
        </form>
    </div>

</body>