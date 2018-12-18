  <style type="text/css">
       #crono1{
        height: 500px;
       }


   </style>

    <!-- Seccion Crono -->

    <style type="text/css">
        #demo-jquery-countdown{
            border-radius: 200px 200px 200px 200px;
-moz-border-radius: 200px 200px 200px 200px;
-webkit-border-radius: 200px 200px 200px 200px;
border: 0px solid #000000;
        }

#fh5co-register {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative;
}
        .overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  content: '';
  background: rgba(0, 0, 0, 0.5);
}

#fh5co-register h2, #fh5co-register h3, #fh5co-register p {
  color: #fff;
}
 .row {
                margin-right: 0px;
                margin-left: 0px;
                padding-top: 20px;
        }



    </style>
    <section   class="contact-area section-padding-100" >

       <div id="fh5co-register"  data-vide-bg="mp4: {{ url('Carnaval1/img/carnaval.mp4')}}" data-vide-options="position: 0% 50%, resizing: true, height:300px" >
                <div class="overlay"></div>
                <style type="text/css">
                    .simply-amount , .simply-word{
                        font-size: 20px;
                    }
                </style>


                <div class="row">
                    <div class="col-md-12 col-md-offset-2 animate-box">
                        <br>
                        <div class="date-counter">
                            <div class="d-flex justify-content-center">
                                <h2><img src="{{ url('Carnaval1/img/text-img/faltaCarnaval.png')}}" id="imgV" class="img-responsive shake-slow"  width="500px;" ></h2>
                            </div>


                            <div class="d-flex justify-content-center">
                                <div class="simply-countdown-losange"  id="demo-jquery-countdown" ></div>
                            </div>




                        </div>
                    </div>
                </div>

            </div>



    </section>