@extends('layouts.landing')

@section('content')
<!--===== HOME =====-->
<section class="home bd-grid" id="home">
    <div class="home__data">
        <h1 class="home__title">Hi,<br>I'm <span class="home__title-color">Faizal</span><br> Graphics Designer</h1>

        <a href="https://wa.me/6281809042643" target="_blank" class="button">Get in touch</a>
    </div>

    <div class="home__social">
        <a href="https://instagram.com/jaleisme_" target="_blank" class="home__social-icon"><i class='bx bxl-instagram-alt'></i></a>
        <a href="https://twitter.com/jaleisme" target="_blank" class="home__social-icon"><i class='bx bxl-twitter' ></i></a>
        <a href="https://wa.me/6281809042643" target="_blank" class="home__social-icon"><i class='bx bxl-whatsapp' ></i></a>
    </div>

    <div class="home__img">
        <img src="{{ asset('landing/images/hero-img.png') }}" alt="">
    </div>
</section>

<!--===== ABOUT =====-->
<section class="about section " id="about">
    <h2 class="section-title">About Me</h2>

    <div class="about__container bd-grid">
        <div class="about__img">
            <img src="{{ asset('landing/images/about-img.png') }}" alt="">
        </div>

        <div>
            <h2 class="about__subtitle">Hello there!</h2>
            <p class="about__text" style="text-align: justify;">My name is Faizal Ramadhan, people call me 'Jale'. Born on November 2002, I came from an absolutely great tropical island in West Java, Indonesia. I do tech stuff for fun. Such as programming, UI/UX Designing, and of course Graphic Designing.
                <br><br>
            For some reason, i love to read books and also write some simple phrase out of my minds. I also like to listen to musics. If you want to know more about me, let's get in touch!</p>
        </div>
    </div>
</section>

<!--===== SKILLS =====-->
<section class="skills section" id="skills">
    <h2 class="section-title">Skills</h2>

    <div class="skills__container bd-grid">
        <div>
            <h2 class="skills__subtitle">Tech Skills</h2>
            <p class="skills__text">Not only a graphics designer, i'm also capable of doing some tech stuff. Here's my expertise:</p>
            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bxs-server skills__icon' ></i>
                    <span class="skills__name">Back-end Web Dev</span>
                </div>
                <div class="skills__bar skills__html">

                </div>
                <div>
                    <span class="skills__percentage">90%</span>
                </div>
            </div>
            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bx-code-alt skills__icon'></i>
                    <span class="skills__name">Front-end Web Dev</span>
                </div>
                <div class="skills__bar skills__css">

                </div>
                <div>
                    <span class="skills__percentage">80%</span>
                </div>
            </div>
            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bxs-data skills__icon' ></i>
                    <span class="skills__name">Data Management</span>
                </div>
                <div class="skills__bar skills__js">

                </div>
                <div>
                    <span class="skills__percentage">70%</span>
                </div>
            </div>
            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bxs-paint skills__icon'></i>
                    <span class="skills__name">UI/UX Designing</span>
                </div>
                <div class="skills__bar skills__ux">

                </div>
                <div>
                    <span class="skills__percentage">80%</span>
                </div>
            </div>
        </div>

        <div>
            <img src="{{ asset('landing/illustrations/skills-illus.svg') }}" alt="" class="skills__img">
        </div>
    </div>
</section>

<!--===== WORK =====-->
<section class="work section" id="work">
    <h2 class="section-title">My Works</h2>

    <div class="work__container bd-grid">
        <div class="work__img">
            <img src="{{ asset('landing/images/aw1.png') }}" alt="">
        </div>
        <div class="work__img">
            <img src="{{ asset('landing/images/aw2.png') }}" alt="">
        </div>
        <div class="work__img">
            <img src="{{ asset('landing/images/aw3.png') }}" alt="">
        </div>
        <div class="work__img">
            <img src="{{ asset('landing/images/aw4.png') }}" alt="">
        </div>
        <div class="work__img">
            <img src="{{ asset('landing/images/aw5.png') }}" alt="">
        </div>
        <div class="work__img">
            <img src="{{ asset('landing/images/aw6.png') }}" alt="">
        </div>
        <div class="work__img">
            <img src="{{ asset('landing/images/aw7.png') }}" alt="">
        </div>
        <div class="work__img">
            <img src="{{ asset('landing/images/aw8.png') }}" alt="">
        </div>
        <div class="work__img">
            <img src="{{ asset('landing/images/aw9.png') }}" alt="">
        </div>
    </div>
</section>
@endsection

