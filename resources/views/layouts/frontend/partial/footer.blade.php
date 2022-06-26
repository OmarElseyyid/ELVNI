<footer>
    <div class="container">
        <div class="grid grid-lg">
            <div class="unit-2-5 unit-1-1-md unit-1-1-sm unit-vertical-center margin-bottom">
                <a class="logo" href="index.html"><img src="{{ asset('template') }}/img/logo-inverse.svg"
                        alt="Torgerson Design Partners" /></a>
                <nav class="columns">
                    <div><a href="portfolio.html">Portfolio</a></div>
                    <div><a href="services.html">Services</a></div>
                    <div><a href="industries.html">Industries</a></div>
                    <div><a href="our-partners.html">Our Partners</a></div>
                    <div><a href="about.html">About</a></div>
                    <div><a href="about/contact.html">Contact Us</a></div>
                    <div><a href="about/careers.html">Join Our Team</a></div>
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
                </nav>
            </div>
            <div class="unit-3-5 unit-1-1-md unit-1-1-sm unit-vertical-center">
                <div id="newsletter" class="grid grid-center">
                    <div class="unit-2-3 unit-1-1-md">
                        <h5>Get News <b>+</b> Updates</h5>
                        <p>Stay connected with us! Get updates, follow projects from sketchpad to completion, and
                            more.</p>
                        <form class="inline" action="index.html#newsletter" method="POST">
                            <input type="hidden" name="CRAFT_CSRF_TOKEN"
                                value="5v8U-R3OO4zyDidKk8YfEiRjAWn-7ZyKFmfw4leB_E8YLWjL515M4ounbagsvQn0hzhePeCcfHdQUXNbuL6xwCINoKs114s_cVQcqbcMH48=">
                            <input type="hidden" name="action" value="mailchimp-subscribe/list/subscribe" />
                            <div class="fluid">
                                <input type="text" name="email" placeholder="Enter your email address"
                                    value="" required />
                            </div>
                            <button type="submit"><i class="far fa-chevron-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="legal">
        <div class="grid">
            <div class="unit-1-2 unit-1-1-sm">
                <p>© Copyright 2022 Torgerson Design Partners.</p>
            </div>
            <div class="unit-1-2 unit-1-1-sm">
                <nav> <a href="privacy-policy.html">Privacy Policy</a><span> | </span>
                    <a href="terms-of-use.html">Terms of Use</a><span> | </span>
                    Site by <span><a target="_blank" href="https://www.mostlyserious.io">Mostly Serious</a></span>
                </nav>
            </div>
        </div>
    </div>
</footer>









{{-- <footer>

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="footer-section">

                    
                    <p class="copyright">{{ env('APP_NAME') }} @ {{ date('Y') }}. All rights reserved.</p>
                    <p class="copyright"><strong> Developed &amp; <i class="far fa-heart"></i> by </strong>
                        <a href="https://www.itsourcecode.com" target="_blank">Itsourcecode</a></p>
                    <ul class="icons">
                        <li><a target="_blank" href="https://www.facebook.com/cip.fahim.me"><i class="ion-social-facebook-outline"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/CipFahim"><i class="ion-social-twitter-outline"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/cip.fahim/"><i class="ion-social-instagram-outline"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/programmingkit"><i class="ion-social-youtube-outline"></i></a></li>
                    </ul>

                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="footer-section">
                    <h4 class="title"><b>CATAGORIES</b></h4>
                    <ul>
                        @foreach($categories as $category)
                            <li><a href="{{ route('category.posts',$category->slug) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="footer-section">

                    <h4 class="title"><b>SUBSCRIBE</b></h4>
                    <div class="input-area">
                        <form method="POST" action="{{ route('subscriber.store') }}">
                            @csrf
                            <input class="email-input" name="email" type="email" placeholder="Enter your email">
                            <button class="submit-btn" type="submit"><i class="icon ion-ios-email-outline"></i></button>
                        </form>
                    </div>

                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 -->

        </div><!-- row -->
    </div><!-- container -->
</footer> --}}