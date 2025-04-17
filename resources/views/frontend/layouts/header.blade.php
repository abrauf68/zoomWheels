<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{ route('frontend.home') }}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            {{-- <img src="{{ asset('frontAssets/img/logo4.png') }}" alt="">  --}}
            <h1 class="sitename">{{\App\Helpers\Helper::getCompanyName()}}</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('frontend.home') }}" class="{{ request()->routeIs('frontend.home') ? 'active' : '' }}">Home<br></a>
                </li>
                <li><a href="{{ route('frontend.about') }}" class="{{ request()->routeIs('frontend.about') ? 'active' : '' }}">About</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="{{ request()->routeIs('frontend.services') ? 'active' : '' }}"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('frontend.services') }}"
                                class="{{ request()->routeIs('frontend.services') ? 'active' : '' }}">All Services</a></li>
                        <li><a href="#">Freight Forwarding</a></li>
                        <li><a href="#">Warehousing</a></li>
                        <li><a href="#">Logistics</a></li>
                        <li><a href="#">Custom Clearance</a></li>
                        <li><a href="#">Supply Chain Solutions</a></li>
                        <li><a href="#">Distribution</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('frontend.pricing') }}"
                        class="{{ request()->routeIs('frontend.pricing') ? 'active' : '' }}">Pricing</a></li>
                {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li> --}}
                <li><a href="{{ route('frontend.contact') }}"
                        class="{{ request()->routeIs('frontend.contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="{{ route('frontend.get-a-quote') }}">Get a Quote</a>

    </div>
</header>
