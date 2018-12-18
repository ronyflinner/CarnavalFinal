
@inject('request', 'Illuminate\Http\Request')

@extends('layouts.app')

@section('content')
    @include('errors.request')
    @include('errors.flash')
    <!-- Main content -->
    <section class="content">

        <!-- left column -->
              <!-- Formulario -->
              <div class="box box-primary">
                    <div class="box-header with-border">
                      <form class="contact100-form validate-form"  enctype="multipart/form-data" action="{{ route('admin.fotografia.store') }} " method="post"  id="avatarForm">
                        <h3 class="box-title" align="center">Agregar Nueva Fotografia</h3>
                        <hr>
                      <div class="wrap-input100 bg1 ">
                         <span class="label-input100"><h5>Seleccionar tipo de documentos a cargar<h5></span>
                        <br>
                        <br>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group" >
                             <p>Fotografia Elegida</p>
                             <br>

                              <div class="form-group">

                                    {{ csrf_field() }}
                                  <input id="file-3"  name='file' type="file" id="avatarInput" multiple=true>

                              </div>
                            </div>
                          </div>


                        </div>
                      </div>
                       <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" style="width: 100%" data-validate = "Please Type Your Name">
                          <span class="label-input100"><h5>Seleccione fecha<h5></span>
                          <hr>
                          <div class="form-group">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name='calendar' class="form-control pull-left" id="datepicker">
                              </div>
                              <!-- /.input group -->
                            </div>
                        </div>


                          <div class="container-contact100-form-btn">
                            <button type="submit" class="contact100-form-btn" id="but">
                              <span>
                                Publicar Fotografia
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                              </span>
                            </button>
                          </div>
                      </form>
                    </div>
                  </div>


@endsection

@section('javascript')

    <script src="{{ url('adminlte/js/fileinput.min.js') }}"></script>
    <script src="{{ url('adminlte/js/fileinput.js') }}"></script>

    <script src="{{ url('adminlte/js/bootstrap-datepicker.min.js') }}"></script>
  <script type="text/javascript">

    $(function () {
      $('#datepicker').datepicker({
      autoclose: true
       });

    })
  </script>

  <script>
  $("#file-3").fileinput({
    showCaption: false,
    browseClass: "btn btn-primary btn-lg",
    fileType: "any"
  });
   $("#file-4").fileinput({
    showCaption: false,
    browseClass: "btn btn-primary btn-lg",
    fileType: "any"
  });

   $("#PU").click(function() {
    $('#urlA').css('display','none');
    $('#imgA').css('display','block');
   });
   $("#PI").click(function() {
    $('#imgA').css('display','none');
    $('#urlA').css('display','block');
   });


   $("#destiny").hide(6000);

  </script>









  @endsection