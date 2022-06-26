@extends('layouts.frontend.app')

@section('title', 'Home')

@section('content')



    <main>
        <div class="accordion-section">
            <section class="hero full"
                style="
background-image: url(
          https://media.tdp-arch.com/_hero/HOME-Torgerson-Design-Partners-Hero-Banner.jpg
      );">
                <article class="narrow">
                    <div data-aos="fade-up" data-aos-delay="100">
                        <h2 class="h4">Services</h2>
                        <h1 class="h2">A full-service architecture firm based in Ozark, Missouri</h1>
                        <p><a class="button outline" href="services.html" target="">Learn More <i
                                    class="far fa-chevron-right"></i></a></p>
                    </div>
                </article>
            </section>
            <div class="accordions">
                <section>
                    <h5>Architecture</h5>
                    <span class="close"><i class="far fa-times"></i><i class="far fa-plus"></i></span>
                    <article>
                        <div class="grid grid-lg">
                            <div class="unit-1-2 unit-1-1-md unit-vertical-center margin-bottom">
                                <img class="full" src="https://media.tdp-arch.com/_rectangle/Architecture-Slider.png"
                                    alt="Architecture Slider" />
                            </div>
                            <div class="unit-1-2 unit-1-1-md unit-vertical-center margin-bottom">
                                <h3 class="flourish text"><span
                                        class="flourish-square"></span><strong><em><em><u>Architecture</u></em></em></strong><strong><em><em><u><br></u></em></em></strong><strong><em><em><u><br></u></em></em></strong>Our
                                    team of professional architects can manage your project from start to finish.</h3>
                                <p><a class="inline-button alt inverse margin-top" href="services/architecture.html"
                                        target="">Learn More <i class="far fa-chevron-right"></i></a></p>
                            </div>
                        </div>
                    </article>
                </section>
                <section>
                    <h5>Real Estate</h5>
                    <span class="close"><i class="far fa-times"></i><i class="far fa-plus"></i></span>
                    <article>
                        <div class="grid grid-lg">
                            <div class="unit-1-2 unit-1-1-md unit-vertical-center margin-bottom">
                                <img class="full" src="https://media.tdp-arch.com/_rectangle/Real-Estate-Slider.png"
                                    alt="Real Estate Slider" />
                            </div>
                            <div class="unit-1-2 unit-1-1-md unit-vertical-center margin-bottom">
                                <h3 class="flourish text"><span class="flourish-square"></span><em><u><strong>Real
                                                Estate</strong></u></em><em><u><strong><br></strong></u></em><em><u><strong><br></strong></u></em>As
                                    part of a full-service firm, we offer comprehensive services in real estate and
                                    property management.</h3>
                                <p><a class="inline-button margin-top" href="services/commercial-property-for-sale.html"
                                        target="">Learn more <i class="far fa-chevron-right"></i></a></p>
                            </div>
                        </div>
                    </article>
                </section>
                <section>
                    <h5>Development</h5>
                    <span class="close"><i class="far fa-times"></i><i class="far fa-plus"></i></span>
                    <article>
                        <div class="grid grid-lg">
                            <div class="unit-1-2 unit-1-1-md unit-vertical-center margin-bottom">
                                <img class="full"
                                    src="https://media.tdp-arch.com/_rectangle/HOME-Commercial-Property-Developers-Development.jpg"
                                    alt="HOME Commercial Property Developers Development" />
                            </div>
                            <div class="unit-1-2 unit-1-1-md unit-vertical-center margin-bottom">
                                <h3 class="flourish text"><span
                                        class="flourish-square"></span><strong><em><u>Development</u></em></strong><strong><em><u><br></u></em></strong><strong><em><u><br></u></em></strong><strong><em><u><br></u></em></strong>We’re
                                    experts in development logistics, and we strive to make the whole process easier for
                                    our clients.</h3>
                                <p><a class="inline-button margin-top" href="services/commercial-development.html"
                                        target="">Learn More <i class="far fa-chevron-right"></i></a></p>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
        </div>
        <section class="slate padding-sm quote quote quote">
            <article>
                <div class="grid grid-lg grid-center padding-top-sm">
                    <div class="unit-1-4 unit-1-2-md unit-1-1-sm margin-bottom-md">
                        <div class="text-center">
                            <h2 class="icon margin-bottom-sm">
                                <img class="animated-icon invisible" src="https://media.tdp-arch.com/Calendar_Icon.gif"
                                    data-src="https://media.tdp-arch.com/Calendar_Icon.gif" />
                            </h2>
                            <h5 class="bold-highlight text-uppercase animate-count">Over <strong>12</strong> years in
                                business</h5>

                        </div>
                    </div>
                    <div class="unit-1-4 unit-1-2-md unit-1-1-sm margin-bottom-md">
                        <div class="text-center">
                            <h2 class="icon margin-bottom-sm">
                                <img class="animated-icon invisible" src="https://media.tdp-arch.com/Building_Icon2.gif"
                                    data-src="https://media.tdp-arch.com/Building_Icon2.gif" />
                            </h2>
                            <h5 class="bold-highlight text-uppercase animate-count"><strong>2,329</strong> projects
                                completed</h5>

                        </div>
                    </div>
                    <div class="unit-1-4 unit-1-2-md unit-1-1-sm margin-bottom-md">
                        <div class="text-center">
                            <h2 class="icon margin-bottom-sm">
                                <img class="animated-icon invisible" src="https://media.tdp-arch.com/Map_Icon2.gif"
                                    data-src="https://media.tdp-arch.com/Map_Icon2.gif" />
                            </h2>
                            <h5 class="bold-highlight text-uppercase animate-count">Licensed in<br><strong>34</strong>
                                States</h5>

                        </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="">
            <article>
                <div class="grid grid-center margin-bottom-lg">
                    <div class="unit-2-3 unit-1-1-md">
                        <h3 class="flourish text"><span class="flourish-square"></span>We combine genuine conversation
                            with cutting-edge technology to ensure we’re delivering your vision every step of the way.
                        </h3>
                    </div>
                </div>
                <div class="highlights">
                    <div class="highlight">
                        <div class="image">
                            <img src="https://media.tdp-arch.com/_rectangle/edited-new-cathy-Justin_210125_192713.png"
                                alt="Edited new cathy Justin" data-aos="fade-left" data-aos-delay="100"
                                data-aos-duration="500" data-aos-easing="ease-in-out" />
                        </div>
                        <div class="content">
                            <div class="content-container">
                                <p>At Torgerson Design Partners, we are committed to our clients first—listening to your
                                    needs and goals for each project. We go above and beyond to be a partner you can
                                    trust. </p>
                                <p class=""><a class="inline-button" href="about.html" target="">Meet Our
                                        Team <i class="far fa-chevron-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="highlight">
                        <div class="image">
                            <img src="https://media.tdp-arch.com/_rectangle/Workshop-Interior-1.jpg"
                                alt="Workshop Interior 1" data-aos="fade-right" data-aos-delay="100"
                                data-aos-duration="500" data-aos-easing="ease-in-out" />
                        </div>
                        <div class="content">
                            <div class="content-container">
                                <p>From site selection and feasibility, to design and development, to property
                                    management and marketing—we do it all. And we do it all well.</p>
                                <p class=""><a class="inline-button" href="services.html" target="">See
                                        Our Services <i class="far fa-chevron-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="highlight">
                        <div class="image">
                            <img src="https://media.tdp-arch.com/_rectangle/HOME-Commercial-Property-Developers-Industries.jpg"
                                alt="HOME Commercial Property Developers Industries"
                                data-aos="fade-left" data-aos-delay="100" data-aos-duration="500"
                                data-aos-easing="ease-in-out" />
                        </div>
                        <div class="content">
                            <div class="content-container">
                                <p>Our commercial expertise serves the unique needs of multiple industries. </p>
                                <p class=""><a class="inline-button" href="industries.html"
                                        target="">Industries We Serve <i class="far fa-chevron-right"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="black">
            <article>
                <h4 class="margin-bottom">Featured Project</h4>
                <h2 class="h1 text-inset">Mitchum Jewelers</h2>
                <div class="grid">
                    <div class="unit-1-4 unit-1-1-sm margin-bottom">
                        <div class="margin-top text-right text-left-sm">
                            <p>Renovation and expansion project in Ozark, MO, blending local history and modern details.
                            </p>
                        </div>
                    </div>
                    <div class="unit-3-4 unit-1-1-sm margin-bottom-sm">
                        <div class="rellax" data-rellax-speed="1">
                            <a class="action" href="portfolio/mitchum-jewelers.html">
                                <img class="full" src="https://media.tdp-arch.com/_landscape/Mitchums-Cover.png" />
                                <span class="button square"><i class="far fa-chevron-right"></i></span>
                                <div class="content">
                                    <span class="inline-button alt">View Project <i
                                            class="far fa-chevron-right"></i></span>
                                </div>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <p class="alt text-right">
                    <a class="inverse-small" href="services/architecture.html">Architecture</a></h6>
                    <span class="text-red"> &nbsp; / &nbsp; </span>
                    <a class="inverse-small" href="industries/retail-interior-design-firms.html">Retail &amp;
                        Entertainment</a></h6>
                </p>
            </article>
        </section>
        <section class="slate padding-sm">
            <article>
                <div class="grid grid-lg grid-center padding-top-sm">
                    <div class="unit-1-4 unit-1-2-md unit-1-1-sm margin-bottom-md">
                        <div class="text-center">
                            <h2 class="icon margin-bottom-sm">
                                &#61573;
                            </h2>
                            <h5 class="bold-highlight">Full-Service Firm</h5>
                            <p>Our expanded capabilities and team expertise help us provide the best service.</p>
                        </div>
                    </div>
                    <div class="unit-1-4 unit-1-2-md unit-1-1-sm margin-bottom-md">
                        <div class="text-center">
                            <h2 class="icon margin-bottom-sm">
                                &#62023;
                            </h2>
                            <h5 class="bold-highlight">Creative &amp; Cutting-Edge</h5>
                            <p>We blend modern techniques and classic knowledge to create truly unique designs.<br />
                            </p>
                        </div>
                    </div>
                    <div class="unit-1-4 unit-1-2-md unit-1-1-sm margin-bottom-md">
                        <div class="text-center">
                            <h2 class="icon margin-bottom-sm">
                                &#62646;
                            </h2>
                            <h5 class="bold-highlight">Customized Approach</h5>
                            <p>We listen to your needs, goals, and vision first to help us build the right solution.</p>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="work white">
            <article>
                <div class="callout">
                    <div data-aos="fade-left" data-aos-delay="100">
                        <h2>Our work speaks for itself.</h2>
                        <p><a class="inline-button alt" href="portfolio.html">View All Projects <i
                                    class="far fa-chevron-right"></i></a></p>
                    </div>
                </div>
                <div class="grid margin-top-lg">
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/mitchum-jewelers.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/MITCHUM-Thumbnail.jpg);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Retail &amp; Entertainment</h6>
                                    <h5>Mitchum Jewelers&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/fun-mountain.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/Fun-Mountian-Exterior.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Retail &amp; Entertainment</h6>
                                    <h5>Fun Mountain at Big Cedar&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/the-workshop-at-finley-farms.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/The-workshop-thumbnail.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Retail &amp; Entertainment</h6>
                                    <h5>The Workshop at Finley Farms&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/the-truman-house.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/Truman.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Retail &amp; Entertainment</h6>
                                    <h5>The Truman House at Big Cedar&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/andys-frozen-custard.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/Andys-Rogers-AR-Thumbnail.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Hospitality</h6>
                                    <h5>Andy&#039;s Frozen Custard&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/fire-station.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/Fire-Station-Thumbnail_200506_164146.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Emergency Services</h6>
                                    <h5>Ozark Fire Station #2&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/coxhealth-montclair.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/06_15_20-Paragon-Fabrication-Cox-001.jpg);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Healthcare</h6>
                                    <h5>CoxHealth Montclair Pediatrics&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/missouri-s-t.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/Missouri-ST-4.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Education</h6>
                                    <h5>Missouri S&amp;T&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/scrivener-oil.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/Scrivener-oil-thumbnail.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Corporate</h6>
                                    <h5>Scrivener Oil Headquarters&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/oreilly-auto-parts.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/Oreilly-thumbnail_200116_191328.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Retail &amp; Entertainment</h6>
                                    <h5>O&#039;Reilly Auto Parts&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/7-brew.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/Untitled-1_2022-05-12-163548_tnxm.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Retail &amp; Entertainment</h6>
                                    <h5>7 Brew Coffee&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/amgh-headquarters.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/Helipad-West-Plains.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Emergency Services</h6>
                                    <h5>Air Medical Group National Headquarters&nbsp;<i class="far fa-chevron-right"></i>
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/the-village-baptist-church.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/11_10_18-Paragon360-NC-Village-102.jpg);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Religious</h6>
                                    <h5>The Village Baptist Church&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/farmers-bank.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/Farmers-Thumbnail.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Corporate</h6>
                                    <h5>Farmers Bank&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/buffalo-ridge.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/Buffalo-Ridge-Thumbnail.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Retail &amp; Entertainment</h6>
                                    <h5>Buffalo Ridge&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/ozark-family-clinic.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/Ozark-Family-Clinic-Thumbnail.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Healthcare</h6>
                                    <h5>CoxHealth Ozark Family Clinic&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/springfield-family-vision.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/Springfield-Family-Vision-Thumbnail.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Healthcare</h6>
                                    <h5>Springfield Family Vision&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/century-pines-church-infill.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/Century-Pines-Church-thumbnail.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Multi-family</h6>
                                    <h5>Century Pines - Memory Care Location&nbsp;<i class="far fa-chevron-right"></i>
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/muscle-maker-grill.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/Muscle-Maker-Thumbnail.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Hospitality</h6>
                                    <h5>Muscle Maker Grill&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/signal.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/Signal-South-Campbell.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Retail &amp; Entertainment</h6>
                                    <h5>Signal South Campbell&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit-1-3 unit-1-2-md unit-1-1-sm margin-bottom" data-aos="fade-up" data-aos-delay="100">
                        <a class="tile" href="portfolio/1st-baptist-church.html"
                            style="background-image: url(https://media.tdp-arch.com/_square/muskogee-thumbnail.png);">
                            <div class="content">
                                <div>
                                    <h6><span class="text-red">/</span>Religious</h6>
                                    <h5>First Baptist Church - Muskogee&nbsp;<i class="far fa-chevron-right"></i></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </article>
        </section>

        <section class="padding-bottom-none slate">
            <article>
                <h4 class="margin-none padding-bottom">NEWS + UPDATES FROM TDP</h4>
            </article>
        </section>
        <section class="padding-none slate">
            <div class="carousel">
                <div class="carousel-container">
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/7-16-2-1.html"
                            title="Friday Five: 417&#039;s Best Events 9/3-9/9">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/lake-1.png" alt="Lake 1" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 9/3-9/9&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/7-16-2.html"
                            title="Friday Five: 417&#039;s Best Events 7/30-8/4">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/main_210730_161508.png" alt="Main" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 7/30-8/4&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/7-16-1.html"
                            title="Friday Five: 417&#039;s Best Events 7/23-7/29">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/Roller-coaster.jpeg.png"
                                    alt="Roller coaster jpeg" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 7/23-7/29&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/7-16.html"
                            title="Friday Five: 417&#039;s Best Events 7/16-7/22">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/happy.png" alt="Happy" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 7/16-7/22&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/6-25.html"
                            title="Friday Five: 417&#039;s Best Events 7/2-7/8">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/fireworks.jpeg" alt="Fireworks" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 7/2-7/8&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/5-14-21-1-2.html"
                            title="Friday Five: 417&#039;s Best Events 6/11-6/17">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/movie.png" alt="Movie" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 6/11-6/17&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/5-14-21-1-1.html"
                            title="Friday Five: 417&#039;s Best Events 6/4-6/10">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/Sun.jpeg" alt="Sun" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 6/4-6/10&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/5-14-21-1.html"
                            title="Friday Five: 417&#039;s Best Events 5/28-6/3">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/Burger.jpeg" alt="Burger" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 5/28-6/3&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/5-14-21.html"
                            title="Friday Five: 417&#039;s Best Events 5/14-5/20">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/Rainy.png" alt="Rainy" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 5/14-5/20&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/5-7.html"
                            title="Friday Five: 417&#039;s Best Events 5/7-5/13">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/Mothersd-day.png" alt="Mothersd day" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 5/7-5/13&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/4-30-21.html"
                            title="Friday Five: 417&#039;s Best Events 4/30-5/6">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/Main-group.png" alt="Main group" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 4/30-5/6&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/11-20-1-1.html"
                            title="Friday Five: 417&#039;s Best Events 1/22-1/28">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/Main_210122_150258.png" alt="Main" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 1/22-1/28&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/11-20-1.html"
                            title="Friday Five: 417&#039;s Best Events 12/17-12/24">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/main_201216_164204.png" alt="Main" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 12/17-12/24&nbsp;<i
                                        class="far fa-chevron-right"></i></p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/11-20.html"
                            title="Friday Five: 417&#039;s Best Events 11/20 - 11/26">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/Turkey-Trot-mian.png"
                                    alt="Turkey Trot mian" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 11/20 - 11/26&nbsp;<i
                                        class="far fa-chevron-right"></i></p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/9-25-1.html"
                            title="Friday Five: 417&#039;s Best Events 10/30 - 11/5">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/Main-Photo_201030_184651.png"
                                    alt="Main Photo" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 10/30 - 11/5&nbsp;<i
                                        class="far fa-chevron-right"></i></p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/9-25.html"
                            title="Friday Five: 417&#039;s Best Events 9/25-10-1">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/main.png" alt="Main" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 9/25-10-1&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/8-28.html"
                            title="Friday Five: 417&#039;s Best Events 8/28 - 9/3">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/bettle.png" alt="Bettle" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 8/28 - 9/3&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/7-31-1.html"
                            title="Friday Five: 417&#039;s Best Events 8/7- 8/13">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/group-of-diversity-people-volunteen-arm-around-UDHZGYT-2.jpg"
                                    alt="Group of diversity people volunteen arm around UDHZGYT 2" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 8/7- 8/13&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/7-31.html"
                            title="Friday Five: 417&#039;s Best Events 7/31- 8/6">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/music.jpg" alt="Music" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 7/31- 8/6&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="card" href="news-updates/7-24.html"
                            title="Friday Five: 417&#039;s Best Events 7/24- 7/30">
                            <div class="image">
                                <img src="https://media.tdp-arch.com/_rectangle/Joy.jpg" alt="Joy" />
                            </div>
                            <div class="content">
                                <h6><span class="text-red">/</span>Hometown News</h6>
                                <p>Friday Five: 417&#039;s Best Events 7/24- 7/30&nbsp;<i class="far fa-chevron-right"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="padding-top-none slate">
            <article>
                <p class="padding-top text-right text-left-sm"><a class="inline-button alt"
                        href="about/news-updates.html">Read More Updates <i class="far fa-chevron-right"></i></a></p>
            </article>
        </section>
        <a class="section red" href="start-your-project.html">
            <article class="text-center">
                <h6 class="h2">
                    Let’s talk about <strong>your</strong> project.
                </h6>
                <span class="button outline inverse">Get Started <i class="far fa-chevron-right"></i></span>
            </article>
        </a>
    </main>








    {{-- <div class="main-slider">
        <div class="swiper-container position-static" data-slide-effect="slide" data-autoheight="false"
             data-swiper-speed="500" data-swiper-autoplay="10000" data-swiper-margin="0" data-swiper-slides-per-view="4"
             data-swiper-breakpoints="true" data-swiper-loop="true" >
            <div class="swiper-wrapper">

               @forelse($categories as $category)
                    <div class="swiper-slide">
                        <a class="slider-category" href="{{ route('category.posts',$category->slug) }}">
                            <div class="blog-image"><img src="{{ Storage::url('category/slider/'.$category->image) }}" alt="{{ $category->name }}"></div>

                            <div class="category">
                                <div class="display-table center-text">
                                    <div class="display-table-cell">
                                        <h3><b>{{ $category->name }}</b></h3>
                                    </div>
                                </div>
                            </div>

                        </a>
                    </div><!-- swiper-slide -->
                @empty
                    <div class="swiper-slide">
                        <strong>No Data Found :(</strong>
                    </div><!-- swiper-slide -->
                @endforelse

            </div><!-- swiper-wrapper -->

        </div><!-- swiper-container -->

    </div><!--  -->

    <section class="blog-area section">
        <div class="container">

            <div class="row">
                @forelse($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <div class="single-post post-style-1">

                                <div class="blog-image"><img src="{{ Storage::url('post/'.$post->image) }}" alt="{{ $post->title }}"></div>

                                <a class="avatar" href="{{ route('author.profile',$post->user->username) }}"><img src="{{ Storage::url('profile/'.$post->user->image) }}" alt="Profile Image"></a>

                                <div class="blog-info">

                                    <h4 class="title"><a href="{{ route('post.details',$post->slug) }}"><b>{{ $post->title }}</b></a></h4>

                                    <ul class="post-footer">

                                        <li>
                                            @guest
                                                <a href="javascript:void(0);" onclick="toastr.info('To add favorite list. You need to login first.','Info',{
                                                    closeButton: true,
                                                    progressBar: true,
                                                })"><i class="ion-heart"></i>{{ $post->favorite_to_users->count() }}</a>
                                            @else
                                                <a href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $post->id }}').submit();"
                                                   class="{{ !Auth::user()->favorite_posts->where('pivot.post_id',$post->id)->count()  == 0 ? 'favorite_posts' : ''}}"><i class="ion-heart"></i>{{ $post->favorite_to_users->count() }}</a>

                                                <form id="favorite-form-{{ $post->id }}" method="POST" action="{{ route('post.favorite',$post->id) }}" style="display: none;">
                                                    @csrf
                                                </form>
                                            @endguest

                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-chatbubble"></i>{{ $post->comments->count() }}</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-eye"></i>{{ $post->view_count }}</a>
                                        </li>
                                    </ul>

                                </div><!-- blog-info -->
                            </div><!-- single-post -->
                        </div><!-- card -->
                    </div><!-- col-lg-4 col-md-6 -->
                @empty
                    <div class="col-lg-12 col-md-12">
                        <div class="card h-100">
                            <div class="single-post post-style-1 p-2">
                               <strong>No Post Found :(</strong>
                            </div><!-- single-post -->
                        </div><!-- card -->
                    </div><!-- col-lg-4 col-md-6 -->
                @endforelse
            
            </div><!-- row -->

            <a class="load-more-btn" href="{{ route('post.index') }}"><b>LOAD MORE</b></a>

        </div><!-- container -->
    </section> --}}
@endsection
