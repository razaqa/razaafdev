<header>
    <!-- Main Navbar -->
    <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
        <nav class="nav-position uk-container uk-navbar nav-font-size">
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li class="uk-active">
                        <a href="" class="uk-navbar-item uk-logo nav-font uk-animation-slide-left-small">
                            <img src="{{ asset('img/Logo.png') }}" height="35px" width="35px" alt="" srcset="">&nbsp&nbsp&nbsp
                            <strong> R A Z A A F </strong>&nbsp<div style="color:gray;">D E V</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@s">
                    <li>
                        <button class="main-menu uk-button uk-button-text nav-font uk-animation-scale-up uk-transform-origin-top-center">
                            home
                        </button>
                    </li>
                    &nbsp&nbsp&nbsp
                    <li>
                        <button class="main-menu uk-button uk-button-text nav-font uk-animation-scale-up uk-transform-origin-top-center">
                            writings
                        </button>
                    </li>
                    &nbsp&nbsp&nbsp
                    <li>
                        <button class="main-menu uk-button uk-button-text nav-font uk-animation-scale-up uk-transform-origin-top-center">
                            works
                        </button>
                    </li>
                    &nbsp&nbsp&nbsp
                    <li>
                        <button class="main-menu uk-button uk-button-text nav-font uk-animation-scale-up uk-transform-origin-top-center">
                            about
                        </button>
                    </li>
                </ul>
                <a href="#" class="uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
            </div>
        </nav>
    </div>
</header>

<div id="sidenav" uk-offcanvas="flip: true" class="uk-offcanvas">
    <div class="uk-offcanvas-bar sidenav-background">
        <button class="uk-offcanvas-close uk-close uk-icon" type="button" uk-close="">
        </button>
        <ul class="uk-nav">
            <li>
                <a class="uk-text-large" href="">home</a>
            </li>
            <li>
                <a class="uk-text-large" href="">writings</a>
            </li>
            <li>
                <a class="uk-text-large" href="">works</a>
            </li>
            <li>
                <a class="uk-text-large" href="">about</a>
            </li>
        </ul>
    </div>
</div>
