<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <?php
        include '../section/meta.php';
        ?>
    </head>
    <body class="is-light is-preloading" style="background: #000">
        <?php
        include '../section/nav.php';
        ?>
        <main id="a-main" data-router-wrapper>
            <article class="a-page is-contact" data-router-view="renderer" style="background: #000">
                <div class="a-wrapper">
                    <div class="a-scroll">
                        <header id="h-contact">
                            <div class="overlay"></div>
                            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                                <source src="../media/contacto.mp4" type="video/mp4" />
                            </video>
                            <div class="heading">
                                <h2 class="f-2">
                                    <img src="../img/marca_home.png" alt="Asia - Creative Space">
                                </h2>
                            </div>
                            <div class="quote">
                                <h2 class="f-8">
                                    <div style="font-family: Helvetica Medium Extended; font-size: 15px" class="color_fuente">
                                        Don't be shy
                                    </div>
                                </h2>    
                                <ul>
                                    <li>
                                        <a href="mailto:made@enasia.ar">
                                            <div style="font-family: Helvetica Extended; font-size: 24px" class="color_fuente">
                                                made@enasia.ar
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:+5492615321028">
                                            <div style="font-family: Helvetica Extended; font-size: 24px" class="color_fuente">
                                                +54 9 261 532 1028
                                            </div>
                                        </a>
                                    </li>
                                    <li><a href="#">
                                        <div style="font-family: Helvetica Extended; font-size: 24px" class="color_fuente">
                                            Mendoza, Argentina
                                        </div>
                                    </a><em></em></li>
                                </ul>
                            </div>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a target="_blank" href="https://www.instagram.com/camino.asia/" rel="noopener">
                                            <div style="font-family: Helvetica Roman; font-size: 15px; font-color: #fcf6f4">
                                                <i class="fab fa-instagram"></i> Instagram
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://api.whatsapp.com/send?phone=5492615321028&text=Asia...sorprendeme!" rel="noopener">
                                            <div style="font-family: Helvetica Roman; font-size: 15px; font-color: #fcf6f4">
                                                <i class="fab fa-whatsapp"></i> Whatsapp
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </header>
                    </div>
                </div>
            </article>
        </main>
        <?php
        include '../section/js.php'
        ?>
    </body>
</html>