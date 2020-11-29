<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <?php
        include '../section/meta.php';
        ?>
    </head>
    <body class="is-light is-preloading" style="background: #000000">
        <?php
        //include '../section/nav.php';
        ?>
        <main id="a-main" data-router-wrapper>
            <article class="a-page is-contact" data-router-view="renderer" style="background: #000000">
                <div class="a-wrapper">
                    <div class="a-scroll">
                        <header id="h-contact">
                            <div class="overlay"></div>
                            <video playsinline="playsinline" muted="muted" id="video_home">
                                <source src="../media/home.mp4" type="video/mp4" />
                            </video>
                            <div class="heading">
                                <h2 class="f-2">
                                    <!--<img src="../img/marca_home.png" alt="Asia - Creative Space">-->
                                </h2>
                            </div>
                            <div class="quote">
                                <h2 class="f-8">
                                    <!--<a class="color_fuente" href="mailto:made@enasia.ar" style="font-family: Helvetica Roman; font-size: 14px">made@enasia.ar</a>-->
                                </h2>
                            </div>
                            <div class="social"></div>
                        </header>
                    </div>
                </div>
            </article>
        </main>
        <?php
        include '../section/js.php'
        ?>
        <script>
            $(document).ready(function() {
                video = $('#video_home');
                var videoElement = video.get(0);
                videoElement.play();
                setTimeout(function() {
                    if (!videoElement.paused) {
                        location.href="../work/";
                    }
                }, 2000);
            });
        </script>
    </body>
</html>