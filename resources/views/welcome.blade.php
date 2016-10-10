@extends('layouts.app')

@section('content')
<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="homeHeading">Stylish  way of Shopping </h1>
            <hr>
            <div class="col-xs-12 col-md-12 col-lg-12">
                <img src="img/kjhead.png" class="img-responsive" style="margin: 0 auto">
            </div>
            <p>
                Are you still Shopping traditionally?
                Stop Scrolling long list of products and save your time.
                Here we present 'My Style'.
                Just give us your physical details and You are ready to rock in Parties with Stunning Outlooks to Impress your Girl, your Boss. . .
            </p>
            <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            <a href="#sign-up" class="btn btn-primary btn-xl page-scroll">Sign Up</a>
            <a href="#login" class="btn btn-primary btn-xl page-scroll">Sign In</a>
        </div>
    </div>
</header>
<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">We've got what you need!</h2>
                <hr class="light">
                <p class="text-faded">You are Just one Step away,Our Fashion Stylist will Help you finding the not just the right Product, but those suits your Body. You can save time and Money</p>
                <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
            </div>
        </div>
    </div>
</section>
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Personal Customizations for</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-bicycle text-primary sr-icons"></i>
                    <h3>Casual Days</h3>
                    <p class="text-muted">Just Going Out for day? Remember to wear latest trends</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x  fa-black-tie text-primary sr-icons"></i>
                    <h3>Party</h3>
                    <p class="text-muted">In the Party, Get best outfits. Skip the list on shopping sites. we are here</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                    <h3>Date</h3>
                    <p class="text-muted">Going to Impress someone. Get the most out of the day.. Your appearance matters</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-empire text-primary sr-icons"></i>
                    <h3>Made for Style</h3>
                    <p class="text-muted">If you have any questions about styling, we are just a click away</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .warning {color: #ffc600;
                                opacity: 0.1;
                                -moz-transition:opacity .5s linear;
                          }

</style>

<section class="signup" id="sign-up">
    <div class="container">
        <div class="row">
            <h3 class="col-sm-offset-3 col-sm-6">Signup</h3>
        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-2">

            </div>
            <div class="col-sm-6">
                <form class="form" role="form" method="POST" action="{{ url('/register') }}" onsubmit="retrun checkIfValid();">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name" id="firstname" />
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name" id="lastname" />
                            </div>
                        </div>
                        <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email" id="email" />
                        <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password" id="password" />
                        <input type="password" name="password_confirmation" value="" class="form-control input-lg" placeholder="Confirm Password" id="cnfpassword" />
                        <label>Age</label>
                        <div class="row">
                            <div class="container-fluid">
                                <input type="date" value="" name="dob" class="form-control input-lg" id="dob" />
                            </div>
                        </div>
                        
                        <label>Gender : </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="M" id="male" checked="checked" />Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="F" id="female" />Female
                        </label>
                        <br />
                      
                        <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Create my account</button>
                    </form>
</div>
        </div>
    </div>
    </div>
</section>
<section class="bg-primary" id="login">
   <div class="container">
        <div class="row">
            <h3 class="col-sm-offset-3 col-sm-6">Login</h3>
        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-2">

            </div>
            <div class="col-sm-6">
                <form class="form" role="form">
                    {{ csrf_field() }}
                        
                        <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email" id="email" />
                        <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password" id="password" />
    
                         <a href="#about" class="btn btn-primary btn-xl page-scroll">Sign In</a>
                         <a href="#signup" class="btn btn-primary btn-xl page-scroll">Sign up</a>
                    </form>
            </div>
        </div>
    </div>
    </div>
           
    </div>
    </div>
</section>
<!-- <section class="no-padding" id="portfolio">
    <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section> -->
<aside class="bg-dark">
    <div class="container text-center">
        <div class="call-to-action">
            <h2>Android App Coming Soon . . . .</h2>
            <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button" disabled><strike>Download Now!</strike></a>
        </div>
    </div>
</aside>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="primary">
                <p>Ready to start Styling Yourself? That's great! SignUp and Get Most out of the Fashion Experts, What they have ! </p>
                <p>For Business Enquiries Please Email us at Business@kartjungle.com </p>
            </div>
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <i class="fa fa-phone fa-3x fa-ship"></i>
                <p><a href="mailto:Business@kartjungle.com">business@kartjungle.com</a></p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                <p><a href="mailto:customer@kartjungle.com">customer@kartjungle.com</a></p>
            </div>
        </div>
    </div>
</section>

@endsection
