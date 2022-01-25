<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/esc-portafolio/esc-header.css">
    <link rel="stylesheet" href="css/esc-portafolio/esc-index.css">
    <link rel="stylesheet" href="css/esc-portafolio/esc-var.css">
    <title>ESC | Inicio</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>
<body>
    <header>
        <nav>
            <ul>
                <div class="page">
                    <a href="Index.html"><img src="svg/esc-portafolio/LOGO_PORTAFOLIO.svg" alt=""></a>
                </div>
                <div id="menu" class="menu">
                    <a class="active" href="index.html">Inicio</a>
                    <a href="skills.html">Habilidades</a>
                    <a href="{{route('index')}}">KEEM</a>
                </div>
                <div class="icon-menu">
                    <i id="btn-menu" class="fas fa-bars"></i>
                </div>
            </ul>
        </nav>
    </header>

    <main>
        <div class="banner">
            <div class="banner-content">
                <div class="wrapp">
                    <div class="banner-name">
                        {{$persona->nombre}} {{$persona->apellidoPaterno}} {{$persona->apellidoMaterno}}
                    </div>
                    <div class="banner-text">
                        Front-end Developer
                    </div>
                </div>
            </div>
            <div class="wallpaper">
                <img src="images/esc-portafolio/fondo.jpg" alt="">
            </div>
        </div>
        <div class="container-skills">
            <div class="title">
                Habilidades
            </div>
            <div class="container-icons-skills">
                <div class="skill">
                    <div class="skill-icon">
                        <img src="images/esc-portafolio/html.png" alt="css">
                    </div>
                    <div class="skill-txt">
                        HTML
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-icon">
                        <img src="images/esc-portafolio/css.png" alt="css">
                    </div>
                    <div class="skill-txt">
                        CSS
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-icon">
                        <img src="svg/esc-portafolio/LOGO_PORTAFOLIO.svg" alt="css">
                    </div>
                    <div class="skill-txt">
                        JS
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/esc-portafolio/header.js"></script>
    
</body>
</html>