
<header>
    <span class="hamburger"><span></span></span>
    <a class="logo" href="index.html"><img src="{{ asset('template/img/favicon.ico') }}" alt="Torgerson Design Partners" /></a>
    <nav class="primary">
        <ul>
            <li>
                <a class="" href="/">Anasayfa</a>
            </li>
            <li>
                <a class="" href="services.html">Binicilik<span class="toggle"><i class="far fa-plus"></i><i
                            class="far fa-minus"></i></span></a>
                <div class="dropdown">
                    <ul>
                        <li><a class="" href="services.html">Overview</a></li>
                        <li><a class="" href="services/architecture.html">Architecture</a></li>
                        <li><a class="" href="services/commercial-property-for-sale.html">Real Estate</a></li>
                        <li><a class="" href="services/commercial-development.html">Development</a></li>
                    </ul>
                    <nav class="social">
                        <a href="https://www.facebook.com/TorgersonDesignPartners/" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/torgersondesignpartners/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.pinterest.com/torgersondesignpartners/" target="_blank"><i
                                class="fab fa-pinterest"></i></a>
                        <a href="https://www.linkedin.com/company/torgerson-design-partners/" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                    </nav>
                </div>
            </li>
            <li>
                <a class="" href="industries.html">Hizmetlerimiz<span class="toggle"><i
                            class="far fa-plus"></i><i class="far fa-minus"></i></span></a>
                <div class="dropdown">
                    <ul>
                        <li><a class="" href="industries.html">Overview</a></li>
                        <li><a class="" href="industries/hospitality.html">Hospitality</a></li>
                        <li><a class="" href="industries/healthcare.html">Healthcare</a></li>
                        <li><a class="" href="industries/emergency-services.html">Emergency Services</a>
                        </li>
                        <li><a class="" href="industries/corporate.html">Corporate</a></li>
                        <li><a class="" href="industries/industrial.html">Industrial</a></li>
                        <li><a class="" href="industries/retail-interior-design-firms.html">Retail &amp;
                                Entertainment</a></li>
                        <li><a class="" href="industries/government.html">Government</a></li>
                        <li><a class="" href="industries/education.html">Education</a></li>
                        <li><a class="" href="industries/church-design-firm.html">Religious</a></li>
                        <li><a class="" href="industries/multi-family.html">Multi-family</a></li>
                    </ul>
                    <nav class="social">
                        <a href="https://www.facebook.com/TorgersonDesignPartners/" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/torgersondesignpartners/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.pinterest.com/torgersondesignpartners/" target="_blank"><i
                                class="fab fa-pinterest"></i></a>
                        <a href="https://www.linkedin.com/company/torgerson-design-partners/" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                    </nav>
                </div>
            </li>
            <li>
                <a class="" href="about.html">Hakkımızda<span class="toggle"><i class="far fa-plus"></i><i
                            class="far fa-minus"></i></span></a>
                <div class="dropdown">
                    <ul>
                        <li><a class="" href="about.html">Overview</a></li>
                        <li><a class="" href="about/contact.html">Contact Us</a></li>
                        <li><a class="" href="about/news-updates.html">News &amp; Updates</a></li>
                        <li><a class="" href="about/careers.html">Join Our Team</a></li>
                    </ul>
                    <nav class="social">
                        <a href="https://www.facebook.com/TorgersonDesignPartners/" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/torgersondesignpartners/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.pinterest.com/torgersondesignpartners/" target="_blank"><i
                                class="fab fa-pinterest"></i></a>
                        <a href="https://www.linkedin.com/company/torgerson-design-partners/" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                    </nav>
                </div>
            </li>
            <li><a href="start-your-project.html" target=""><span>Hemen Rezervasyon Yap <i
                            class="fas fa-chevron-right"></i></span></a></li>
        </ul>
    </nav>
</header>

{{-- <header class="bg-success text-white">
    <div class="container-fluid position-relative no-side-padding">

        <a href="{{ route('home') }}" class="logo">{{ env('APP_NAME') }}</a>

        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

        <ul class="main-menu visible-on-click" id="main-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('post.index') }}">Posts</a></li>
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                @if(Auth::user()->role->id == 1)
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                @endif
                @if(Auth::user()->role->id == 2)
                    <li><a href="{{ route('author.dashboard') }}">Dashboard</a></li>
                @endif
            @endguest
        </ul><!-- main-menu -->

        <div class="src-area bg-success text-white">
            <form method="GET" action="{{ route('search') }}">
                <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                <input class="src-input" value="{{ isset($query) ? $query : '' }}" name="query" type="text" placeholder="Search">
            </form>
        </div>

    </div><!-- conatiner -->
</header> --}}
