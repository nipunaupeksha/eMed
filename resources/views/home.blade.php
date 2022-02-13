<!DOCTYPE html>
<html lang="en">
<head>
    {{View::make('head')}}
</head>
<body>
    {{View::make('header')}}
    <main class="main">
        <!--=========== HOME ============-->
        <section class="home" id="home">
            <div class="home__container container grid">
                <img src="{{asset('img/home.png')}}" alt="" class="home__img">
                <div class="home__data">
                    <h1 class="home__title">Digitizing your health.</h1>
                    <p class="home__description">Make your health better with one tap.</p>
                    <a href="#about" class="button button--flex">
                        Explore <i class="ri-arrow-right-down-line button__icon"></i>
                    </a>
                </div>
                <div class="home__social">
                    <span class="home__social-follow">Follow Us</span>
                    <div class="home__social-links">
                        <a href="https://www.facebook.com" target="_blank" class="home__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank" class="home__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://www.twitter.com" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--============ ABOUT ============-->
        <section class="about section container" id="about">
            <div class="about__container grid">
                <img src="{{asset('img/about.png')}}" alt="" class="about__img">
                <div class="about__data">
                    <h2 class="section__title about__title">
                        Who we really are & <br> why choose us
                    </h2>
                    <p class="about__description">
                        We have over 4000+ unbiased reviews and our customers trust our services everytime.
                    </p>
                    <div class="about__details">
                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            We provide the absolute best service.
                        </p>
                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            We prioritize on making your health better.
                        </p>
                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            You can always trust with your confidential details.
                        </p>
                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Our doctors are the top cream of the country.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    {{View::make('footer')}}
</body>
</html>