<!-- hero -->
<div class="main-hero">
    <link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}">
    <!-- slide -->
    <div class="swiper-container hero-slide">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{asset('/images/dummy/img-dummy-10.png')}}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{asset('/images/dummy/img-dummy-11.png')}}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{asset('/images/dummy/img-dummy-10.png')}}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{asset('/images/dummy/img-dummy-11.png')}}" alt="">
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next hero-button-next"></div>
        <div class="swiper-button-prev hero-button-prev"></div>
        <!-- Add Pagination -->
        <div class="swiper-pagination hero-pagination"></div>
    </div>
    <!-- //slide -->
    <script src="{{asset('js/swiper.min.js')}}"></script>
    <script>

        // hero slide
        var heroSwiper = new Swiper('.hero-slide', {
            spaceBetween: 0,
            navigation: {
                nextEl: '.hero-button-next',
                prevEl: '.hero-button-prev',
            },
            loop:true,
            pagination: {
                el: '.hero-pagination',
                clickable: true,
            },
        });


    </script>
</div>
