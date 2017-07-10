@extends('layouts.master')

@section('content')

    <section class="cover height-70 imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
        <ul class="slides">
            <li class="imagebg" data-overlay="4">
                <div class="background-image-holder background--top"> <img alt="background" src="img/landing-2.jpg"> </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1> Streamline your workflow with Stack </h1>
                            <a class="btn btn--primary type--uppercase" href="#"> <span class="btn__text">
                                View The Demos
                            </span> </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="imagebg" data-overlay="4">
                <div class="background-image-holder"> <img alt="background" src="img/landing-3.jpg"> </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1> Streamline your workflow with Stack </h1>
                            <a class="btn btn--primary type--uppercase" href="#"> <span class="btn__text">
                                View The Demos
                            </span> </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <section class="space--sm unpad--bottom switchable text-center testimonial testimonial-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5"> <img alt="Image" src="img/avatar-large-1.png"> </div>
                <div class="col-sm-6">
                    <div class="switchable__text">
                        <blockquote> “There's a feeling of structure that you can't find in other templates — Stack has become my default template.” </blockquote>
                        <h5>Jason Briggs</h5> <span>Envato Customer</span> </div>
                </div>
            </div>
        </div>
    </section>
    <section class="switchable feature-large bg--dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5">
                    <div class="switchable__text">
                        <h2>Perfect for bootstrapped startups</h2>
                        <p class="lead"> Launching an attractive and scalable website quickly and affordably is important for modern startups — Stack offers massive value without looking 'bargain-bin'. </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="boxed boxed--lg boxed--border">
                        <div class="feature feature-2"> <i class="icon icon-Clock-Back color--primary"></i>
                            <div class="feature__body">
                                <h5>Design Faster</h5>
                                <p> Save time with a multitude of styled components designed to showcase your content </p>
                            </div>
                        </div>
                        <div class="feature feature-2"> <i class="icon icon-Duplicate-Window color--primary"></i>
                            <div class="feature__body">
                                <h5>Rapid Development</h5>
                                <p> Construct mockups or production-ready pages in-browser with Variant Page Builder </p>
                            </div>
                        </div>
                        <div class="feature feature-2"> <i class="icon icon-Life-Jacket color--primary"></i>
                            <div class="feature__body">
                                <h5>Elite Support</h5>
                                <p> Take comfort in 6 months included support with a dedicated support forum </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space--lg">
        <div class="container">
            <div class="row">
                <div class="masonry">
                    <div class="masonry-filter-container text-center"> <span>Category:</span>
                        <div class="masonry-filter-holder">
                            <div class="masonry__filters" data-filter-all-text="All Categories"></div>
                        </div>
                    </div>
                    <div class="masonry__container masonry--active">
                        <div class="masonry__item col-md-4 col-xs-6" data-masonry-filter="People">
                            <a href="img/work-6.jpg" data-lightbox="Gallery 1"> <img alt="Image" src="img/work-6.jpg"> </a>
                        </div>
                        <div class="masonry__item col-md-4 col-xs-6" data-masonry-filter="People">
                            <a href="img/work-3.jpg" data-lightbox="Gallery 1"> <img alt="Image" src="img/work-3.jpg"> </a>
                        </div>
                        <div class="masonry__item col-md-4 col-xs-6" data-masonry-filter="People">
                            <a href="img/work-3.jpg" data-lightbox="Gallery 1"> <img alt="Image" src="img/work-3.jpg"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="switchable imagebg height-100" data-overlay="2">
        <div class="background-image-holder"><img alt="background" src="img/architecture-3.jpg"></div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-md-5 col-sm-7 switchable__text">
                    <h1> Streamline your workflow with Stack </h1>
                    <p class="lead"> Build lean, beautiful websites with a clean and contemporary look to suit a range of purposes. </p>
                    <a class="btn btn--primary type--uppercase" href="index.html"> <span class="btn__text">
						View The Demos
					</span> </a>
                </div>
                <div class="col-sm-6">
                    <div class="boxed boxed--lg bg--white boxed--border boxed-form">
                        <h4>Get Started — 14 days <em>FREE!</em></h4>
                        <p>No credit card required, cancel anytime, no contracts.</p>
                        <form>
                            <div class="row">
                                <div class="col-xs-12"> <input type="email" name="Email Address" placeholder="Email Address"> </div>
                                <div class="col-xs-12"> <input type="password" name="Password" placeholder="Password"> </div>
                                <div class="col-xs-12"> <button type="submit" class="btn btn--primary type--uppercase">Create Account</button> </div>
                                <div class="col-xs-12"> <span class="type--fine-print">By signing up, you agree to the <a href="#">Terms of Service</a></span> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection