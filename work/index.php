<?php
include 'index_n.php';
?>
<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <?php
        include '../section/meta.php';
        ?>
    </head>
    <body class="is-light is-preloading" style="background: #06070A">
        <?php
        include '../section/nav.php';
        ?>
        <main id="a-main" data-router-wrapper>
            <article class="a-page is-work" data-router-view="renderer" style="background: #06070A"><!-- style="background: #06070A"-->
                <div class="a-wrapper">
                    <div class="a-scroll">
                        <header id="h-hero">
                            <div class="overlay"></div>
                            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                                <source src="../media/intro.mp4" type="video/mp4" />
                            </video>
                            <div class="heading">
                                <img src="../img/marca.png" alt="Asia - Creative Space">
                            </div>
                            <div class="mask">
                                <div class="bottom-l">
                                    <p>
                                        <a class="color_fuente" href="mailto:made@enasia.ar" style="font-family: Helvetica Roman; font-size: 14px">made@enasia.ar</a>
                                    </p>
                                    <div style="color: #fcf6f4" class="color_fuente">
                                        <div class="d-none d-sm-none d-md-block">
                                            <i class="fas fa-arrow-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-r">
                                    <ul>
                                        <li>
                                            <p class="color_fuente" align="right" style="font-family: Helvetica Extended; font-size: 14px">
                                                Asia es un espacio de<br />
                                                desarrollo creativo en<br />
                                                Mendoza, Argentina
                                            </p>
                                        </li>
                                        <div class="d-block d-sm-block d-md-none">
                                            <li>
                                                <p style="color: #fff" align="left">
                                                    <i class="fas fa-arrow-down"></i>
                                                </p>
                                            </li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </header>
                        <section id="s-work">
                            <div class="head">
                                <h2 class="f-8">
                                    <div style="font-family: Helvetica Medium Extended; font-size: 15px" class="color_fuente">
                                        Trabajos
                                    </div>
                                </h2>
                            </div>
                            <div class="projects">
                                <div class="d-block d-sm-block d-md-none">
                                    <?php
                                    $resultado = obtener_informacion("tb_trabajos", "*", "ACTIVO = '1'", "");
                                    while ($fila = mysql_fetch_array($resultado)) {
                                        ?>
                                        <div data-toggle="modal" data-target="#slider<?php echo $fila['ID'] ?>">
                                            <img src="<?php echo "../admin2020/trabajo/files/" . $fila['IMG_PRI'] ?>">
                                        </div>
                                        <br/>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="d-none d-sm-none d-md-block">
                                    <?php
                                    $anular_aleatorio = false;
                                    $parte = 1;
                                    $resultado = obtener_informacion("tb_trabajos", "*", "ACTIVO = '1'", "");
                                    while ($fila = mysql_fetch_array($resultado)) {
                                        if ($anular_aleatorio == false) {
                                            $tipo = rand(1, 5);
                                        }
                                        switch ($tipo) {
                                            case 1:
                                                // echo "<p class='color_fuente'>CASO 1</p>";
                                                ?>
                                                <div class="row l-a">
                                                    <div class="block" data-src="14">
                                                        <div data-transition="work" data-toggle="modal" data-target="#slider<?php echo $fila['ID'] ?>">
                                                            <div class="title">
                                                                <h3 style="font-family: Helvetica Medium Extended; font-size: 16px">
                                                                    <span style=" font-size: 22px"><?php echo utf8_encode($fila['TITULO']); ?></span>
                                                                    <?php echo utf8_encode($fila['SUBTITULO']); ?>
                                                                </h3>
                                                            </div>
                                                            <div class="thumbnail">
                                                                <img src="<?php echo "../admin2020/trabajo/files/" . $fila['IMG_PRI'] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                break;
                                            case 2:
                                                // echo "<p class='color_fuente'>CASO 2</p>";
                                                if ($parte == 1) {
                                                    $anular_aleatorio = true;
                                                    ?>
                                                    <div class="row l-b">
                                                        <div class="block" data-src="17">
                                                            <div data-transition="work" data-toggle="modal" data-target="#slider<?php echo $fila['ID'] ?>">
                                                                <div class="title">
                                                                    <h3 style="font-family: Helvetica Medium Extended; font-size: 16px">
                                                                        <span style=" font-size: 22px"><?php echo utf8_encode($fila['TITULO']); ?></span>
                                                                        <?php echo utf8_encode($fila['SUBTITULO']); ?>
                                                                    </h3>
                                                                </div>
                                                                <div class="thumbnail">
                                                                    <img src="<?php echo "../admin2020/trabajo/files/" . $fila['IMG_SUS'] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    $parte = 2;
                                                } else if ($parte == 2) {
                                                    $anular_aleatorio = false;
                                                    ?>
                                                        <div class="block" data-src="268">
                                                            <div data-transition="work" data-toggle="modal" data-target="#slider<?php echo $fila['ID'] ?>">
                                                                <div class="title">
                                                                    <h3 style="font-family: Helvetica Medium Extended; font-size: 16px">
                                                                        <span style=" font-size: 22px"><?php echo utf8_encode($fila['TITULO']); ?></span>
                                                                        <?php echo utf8_encode($fila['SUBTITULO']); ?>
                                                                    </h3>
                                                                </div>
                                                                <div class="thumbnail">
                                                                    <img src="<?php echo "../admin2020/trabajo/files/" . $fila['IMG_SUS'] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $parte = 1;
                                                }
                                                break;
                                            case 3:
                                                // echo "<p class='color_fuente'>CASO 3</p>";
                                                if ($parte == 1) {
                                                    $anular_aleatorio = true;
                                                    ?>
                                                    <div class="row l-c">
                                                        <div class="block" style="transform: translate(0px); opacity: 1;" data-src="18">
                                                            <div data-transition="work" data-toggle="modal" data-target="#slider<?php echo $fila['ID'] ?>">
                                                                <div class="title" style="opacity: 0; transform: translate3d(0px, 477.437px, 0px);">
                                                                    <h3 style="font-family: Helvetica Medium Extended; font-size: 16px">
                                                                        <span style=" font-size: 22px"><?php echo utf8_encode($fila['TITULO']); ?></span>
                                                                        <?php echo utf8_encode($fila['SUBTITULO']); ?>
                                                                    </h3>
                                                                </div>
                                                                <div class="thumbnail">
                                                                    <img src="<?php echo "../admin2020/trabajo/files/" . $fila['IMG_SUS'] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    $parte = 2;
                                                } else if ($parte == 2) {
                                                    $anular_aleatorio = false;
                                                    ?>
                                                        <div class="block" style="transform: translate(0px); opacity: 1;">
                                                            <div data-transition="campaign" data-toggle="modal" data-target="#slider<?php echo $fila['ID'] ?>">
                                                                <div class="title" style="opacity: 0; transform: translate3d(0px, 253.528px, 0px);">
                                                                    <h3 style="font-family: Helvetica Medium Extended; font-size: 16px">
                                                                        <span style=" font-size: 22px"><?php echo utf8_encode($fila['TITULO']); ?></span>
                                                                        <?php echo utf8_encode($fila['SUBTITULO']); ?>
                                                                    </h3>
                                                                </div>
                                                                <div class="thumbnail">
                                                                    <img src="<?php echo "../admin2020/trabajo/files/" . $fila['IMG_SUS'] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $parte = 1;
                                                }
                                                break;
                                            case 4:
                                                // echo "<p class='color_fuente'>CASO 4</p>";
                                                ?>
                                                <div class="row l-d">
                                                    <div class="block" data-src="15">
                                                        <div data-transition="work" data-toggle="modal" data-target="#slider<?php echo $fila['ID'] ?>">
                                                            <div class="title">
                                                                <h3 style="font-family: Helvetica Medium Extended; font-size: 16px">
                                                                    <span style=" font-size: 22px"><?php echo utf8_encode($fila['TITULO']); ?></span>
                                                                    <?php echo utf8_encode($fila['SUBTITULO']); ?>
                                                                </h3>
                                                            </div>
                                                            <div class="thumbnail">
                                                                <img src="<?php echo "../admin2020/trabajo/files/" . $fila['IMG_PRI'] ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                break;
                                            case 5:
                                                // echo "<p class='color_fuente'>CASO 5</p>";
                                                if ($parte == 1) {
                                                    $anular_aleatorio = true;
                                                    ?>
                                                    <div class="row l-e">
                                                        <div class="block" style="transform: translate(0px); opacity: 1;">
                                                            <div data-transition="campaign" data-toggle="modal" data-target="#slider<?php echo $fila['ID'] ?>">
                                                                <div class="title" style="opacity: 0; transform: translate3d(0px, 365.404px, 0px);">
                                                                    <h3 style="font-family: Helvetica Medium Extended; font-size: 16px">
                                                                        <span style=" font-size: 22px"><?php echo utf8_encode($fila['TITULO']); ?></span>
                                                                        <?php echo utf8_encode($fila['SUBTITULO']); ?>
                                                                    </h3>
                                                                </div>
                                                                <div class="thumbnail">
                                                                    <img src="<?php echo "../admin2020/trabajo/files/" . $fila['IMG_PRI'] ?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    $parte = 2;
                                                } else if ($parte == 2) {
                                                    $anular_aleatorio = false;
                                                    ?>
                                                            <div class="block" data-src="20" style="transform: translate(0px); opacity: 1;">
                                                                <div data-transition="work" data-toggle="modal" data-target="#slider<?php echo $fila['ID'] ?>">
                                                                    <div class="title">
                                                                        <h3 style="font-family: Helvetica Medium Extended; font-size: 16px">
                                                                            <span style=" font-size: 22px"><?php echo utf8_encode($fila['TITULO']); ?></span>
                                                                            <?php echo utf8_encode($fila['SUBTITULO']); ?>
                                                                        </h3>
                                                                    </div>
                                                                    <div class="thumbnail">
                                                                        <img src="<?php echo "../admin2020/trabajo/files/" . $fila['IMG_SUS'] ?>" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    $parte = 1;
                                                }
                                                break;
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($parte == 2) {
                                        ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </section>
                        <footer id="a-footer">
                            <ul>
                                <li>
                                    <p>
                                        <div style="font-family: Helvetica Medium Extended; font-size: 14px" class="color_fuente">
                                            Mendoza, Argentina - 2020
                                        </div>
                                    </p>
                                </li>
                                <li>
                                    <a href="../" rel="noopener">
                                        <div style="font-family: Helvetica Medium Extended; font-size: 14px" class="color_fuente">    
                                            Asia - Creative Space
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <button data-t>
                                        <div style="font-family: Helvetica Medium Extended; font-size: 14px" class="color_fuente">
                                            <i class="fas fa-arrow-up"></i> Volver a la cima
                                        </div>
                                    </button>
                                </li>
                            </ul>
                        </footer>
                    </div>
                </div>
            </article>
        </main>
        <?php
        include '../section/js.php'
        ?>
    </body>
</html>
<?php
$resultado = obtener_informacion("tb_trabajos", "*", "ACTIVO = '1'", "");
while ($fila = mysql_fetch_array($resultado)) {
    $work = obtener_informacion("tb_trabajos", "IMG_SLI", "ID='" . $fila['ID'] . "'", "");
    $work = mysql_fetch_array($work);
    ?>
    <div class="modal fade bd-example-modal-lg" id="slider<?php echo $fila['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="max-width: 100%;">
            <div class="modal-content" style="background: #000">
                <div id="carouselExampleIndicators<?php echo $fila['ID'] ?>" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php
                        $cadena = explode(";", $work['IMG_SLI']);
                        for ($i=0; $i < count($cadena); $i++) {
                            if (empty($cadena[$i]) == false) {
                                $clase = '';
                                if ($i == 0) {
                                    $clase = ' class="active"';
                                }
                                ?>
                                <li data-target="#carouselExampleIndicators<?php echo $fila['ID'] ?>" data-slide-to="<?php echo $i; ?>" <?php echo $clase; ?>></li>
                                <?php
                            }
                            
                        }
                        ?>
                    </ol>
                    <div class="carousel-inner">
                        <?php
                        $cadena = explode(";", $work['IMG_SLI']);
                        for ($i=0; $i < count($cadena); $i++) {
                            if (empty($cadena[$i]) == false) {
                                $clase = '';
                                if ($i == 0) {
                                    $clase = ' active';
                                }
                                ?>
                                <div class="carousel-item<?php echo $clase; ?>">
                                    <img class="d-block w-100" src="../admin2020/trabajo/files/<?php echo $cadena[$i]; ?>" class="img-fluid">
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators<?php echo $fila['ID'] ?>" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators<?php echo $fila['ID'] ?>" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>