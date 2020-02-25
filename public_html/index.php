<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/coffee/general.css">
    <link rel="stylesheet" href="/coffee/layout.css">

    <title>Wombat Coffee Roasters</title>
</head>

<body>
    <header id="header" class="page-header">
        <div class="title">
            <h1>Wombat Coffee Roasters</h1>
            <div class="slogan">We love coffee</div>
        </div>
    </header>

    <nav class="menu" id="main-menu">

        <button class="menu-toggle" id="toggle-menu">
            toggle menu
        </button>
        <div class="menu-dropdown">
            <ul class="nav-menu"> 
                 <li><a href="/menu.html">Menu</a></li>         
                <li><a href="/about.html">About</a></li>
                <li><a href="/pay.php">PayPal</a></li>
            </ul>
        </div>
    </nav>

    <aside id="hero" class="hero">
        Welcome to Wombat Coffee Roasters! We are
        passionate about our craft, striving to bring you
        the best hand-crafted coffee in the city.
    </aside>

    <main id="main">
        <div class="row">

            <section class="column">
                <h2 class="subtitle">Single-origin</h2>
                <p>
                    We have built partnerships with small farms
                    around the world to hand-select beans at the
                    peak of season. We then carefully roast in
                    <a href="/batch-size.html">small batches</a>
                    to maximize their potential.
                </p>
            </section>
            <section class="column">
                <h2 class="subtitle">Blends</h2>
                <p>
                    Our tasters have put together a selection of
                    carefully balanced blends. Our famous
                    <a href="/house-blend.html">house blend</a>
                    is available year round.</p>
            </section>
            <section class="column">
                <h2 class="subtitle">Brewing Equipment</h2>
                <p>
                    We offer our favorite kettles, French
                    presses, and pour-over cones. Come to one of
                    our <a href="/classes.html">brewingclasses</a>
                    to learn how to brew the perfect pour-over cup.
                </p>
            </section>
        </div>
    </main>

    <script type="text/javascript">
        (function () {
            var button = document.getElementById('toggle-menu');
            button.addEventListener('click', function (event) {
                event.preventDefault();
                var menu = document.getElementById('main-menu');
                menu.classList.toggle('is-open');
            });
        })();
    </script>
</body>

</html>