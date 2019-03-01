<nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background: rgba(1,1,1,0.5);">
    <div class="container">

        <!-- Navbar: Brand -->
        <a class="navbar-brand d-lg-none" href="#">{{ config('product_name') }}</a>

        <!-- Navbar: Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar: Collapse -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Navbar: Brand -->
            <a class="navbar-brand d-none d-lg-flex logo" href="{{ route('index') }}"></a>

            <!-- Navbar navigation: Right -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('productList')}}">products</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">about us</a>
                </li>
            </ul>

        </div> <!-- / .navbar-collapse -->

    </div> <!-- / .container -->
</nav>