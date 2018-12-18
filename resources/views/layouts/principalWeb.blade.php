
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

    <script>
    window._token = '{{ csrf_token() }}';

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

    </script>

    @yield('Javascripts')


    </body>
</html>

