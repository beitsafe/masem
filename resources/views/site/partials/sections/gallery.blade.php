<section class="space--lg" id="gallery">
    <div class="container">
        <div class="row">
            <div class="masonry">

                <h2 class="text-center">Please Enjoy Our <span>Portfolio</span></h2>

                <div class="masonry-filter-container text-center"> <span>Category:</span>
                    <div class="masonry-filter-holder">
                        <div class="masonry__filters" data-filter-all-text="All Categories"></div>
                    </div>
                </div>

                <div class="masonry__container masonry--active">
                    <div class="masonry__item col-md-4 col-xs-6" data-masonry-filter="Commercial">
                        <a href="{{ asset('img/work-6.jpg') }}" data-lightbox="Gallery 1">
                            <img alt="Image" src="{{ asset('img/work-6.jpg') }}">
                        </a>
                    </div>

                    <div class="masonry__item col-md-4 col-xs-6" data-masonry-filter="Residential">
                        <a href="{{ asset('img/work-3.jpg') }}" data-lightbox="Gallery 2">
                            <img alt="Image" src="{{ asset('img/work-3.jpg') }}">
                        </a>
                    </div>

                    <div class="masonry__item col-md-4 col-xs-6" data-masonry-filter="Residential">
                        <a href="{{ asset('img/work-3.jpg') }}" data-lightbox="Gallery 3">
                            <img alt="Image" src="{{ asset('img/work-3.jpg') }}">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>