
    @include('partials.headWeb')

    <body>

   <div class="fh5co-loader"></div>
   <!--<div class="text-center" id="fakeLoader"></div>-->

    <div id="page">
        @include('partials.menu')
        @yield('banner')
        @yield('content')
        @include('partials.crono')
        @yield('seccion_b')
        @yield('seccion_c')
        @yield('seccion_d')
        @include('partials.sponsor')
        @include('partials.footer')

    </div>

    <!-- WEB -->
     <script src="{{ url('Carnaval1/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ url('Carnaval1/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{ url('Carnaval1/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{ url('Carnaval1/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{ url('Carnaval1/js/active.js')}}"></script>

    <script src="{{ url('Carnaval1/js/circleaudioplayer.js')}}"></script>
    <script src="{{ url('Carnaval1/js/jquery.vide.min.js')}}"></script>
    <script src="{{ url('Carnaval1/js/simplyCountdown.js')}}"></script>

    <script src="{{ url('Carnaval1/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{ url('Carnaval1/js/jquery-modal-video.min.js')}}"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>



    <script>
    window._token = '{{ csrf_token() }}';

       $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                    event.preventDefault();
                    $(this).ekkoLightbox();
                });

    var d = new Date(new Date().getTime() + 48 * 120 * 120 * 3000);

            //A demo of jQuery countdown
           $('#demo-jquery-countdown').simplyCountdown({
                year: 2019,
                month: 3,
                day: 2,
                enableUtc: true
            });

            $(document).ready(function() {



            $("#news-slider").owlCarousel({
                items : 2,
                itemsDesktop : [1199,2],
                itemsMobile : [600,1],
                pagination :true,
                autoPlay : true,
                loop:true,
                responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                }
            }
            });

            $('.clients_slider').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                dots: false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            });

        });

                var owl1 = $('#owl-carousel');
                    owl1.owlCarousel({ loop:true,
                    nav:false,
                    autoplay:true,
                    autoplayTimeout:3000,
                    autoplayHoverPause:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:3
                        },
                        1000:{
                            items:4
                        }
                    }
                });
                    owl1.owlCarousel();

                $('.customNextBtn').click(function() {

                    owl1.trigger('next.owl.carousel');
                })
                // Go to the previous item
                $('.customPrevBtn').click(function() {
                    // With optional speed parameter
                    // Parameters has to be in square bracket '[]'
                    owl1.trigger('prev.owl.carousel', [300]);
                });

                var owl2 = $('#owl-carousel1');
                    owl2.owlCarousel({ loop:true,
                    nav:false,
                    autoplay:true,
                    autoplayTimeout:3000,
                    autoplayHoverPause:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:2
                        },
                        1000:{
                            items:2
                        }
                    }
                });
                    owl2.owlCarousel();

                $('.customNextBtn').click(function() {

                    owl2.trigger('next.owl.carousel');
                })
                // Go to the previous item
                $('.customPrevBtn').click(function() {
                    // With optional speed parameter
                    // Parameters has to be in square bracket '[]'
                    owl2.trigger('prev.owl.carousel', [300]);
                })




             $(".js-video-button").modalVideo({
                       youtube:{
                        controls: 0,
                        autoplay: 1,
                        nocookie: true,
                        playlist: null,
                        playsinline: null,

                        cc_load_policy: 1,
                        color: null,
                        disablekb: 0,
                        enablejsapi: 0,
                        end: null,
                        fs: 1,
                        h1: null,
                        iv_load_policy: 1,
                        list: null,
                        listType: null,
                        loop: 0,
                        modestbranding: null,
                        origin: null,
                        rel: 0,
                        showinfo: 1,
                        start: 0,
                        wmode: 'transparent',
                        theme: 'dark'
                    }
                  });

    </script>

    @yield('Javascripts')


    </body>
</html>

