
@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')

    @include('errors.request')
    @include('errors.flash')



    <!-- Main content -->

    <section class="content">

              <div class="box box-primary">
                    <div class="box-header with-border" >

                      <form class="contact100-form validate-form" enctype="multipart/form-data" action="{{ route('admin.comunicados.store') }} " method="post"  id="avatarForm">

                      <form class="contact100-form validate-form"  enctype="multipart/form-data">

                      {!! Form::open(['route'=>'admin.comunicados.store', 'method'=>'POST',"class"=>"form form-id",'files' => true, 'id'=>'form-id']) !!}
                      {!! Form::token() !!}



                        <h3 class="box-title" align="center">Agregar Nuevo Comunicado</h3>
                        <hr>
                        <div class="wrap-input100 validate-input bg1 rs1-wrap-input101" data-validate="">
                                <span class="label-input100"><h5>Título del Comunicado<h5></span>
                            <input class="input100" type="text" name="title_entre" placeholder="Escriba el título del comunicado">
                        </div>

                      <div class="wrap-input100 bg1 ">
                         <span class="label-input100"><h5>Seleccionar tipo de documentos a cargar<h5></span>
                        <br>
                        <div class="dropdown" >
                            <div class="row">
                              <div class="col-md-4">
                                <div class="radio">
                                    <label><input type="radio" name="optradio" checked id="PU">Portada principal y imagen adicional</label>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                <div class="radio">
                                <label><input type="radio" name="optradio" id="PI" >Portada Principal y URL</label>
                              </div>
                              </div>
                            </div>


                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group" >
                             <p>Portada Principal</p>
                             <br>
                              {{ csrf_field() }}
                              <div class="form-group">
                                  <input id="file-3" type="file" multiple=true name="f_principal">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group" id="imgA">
                                <p>Imagen Adicional</p>
                                <div class="form-group">
                                    <input id="file-4" type="file" multiple=true name = "f_secundaria">
                                </div>
                            </div>
                            <div class="input-group" id="urlA" style="display: none">
                              <span class="input-group-addon">Pegar aquí el URL</span>
                              <input id="msg" type="text" class="form-control" name="msg" placeholder="URL del comunicado" >
                            </div>
                        </div>

                        </div>
                      </div>
                       <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
                          <span class="label-input100"><h5>Describir el comunicado</h5></span>
                          <br>
                           <textarea class="input100"id="editor1" name="message" placeholder="Escribir aqui el comunicado">

                          </textarea>

                        </div>


                       <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" style="width: 100%" data-validate = "Please Type Your Name">

                         <div class="row">
                           <div class="col-md-3">
                             <span class="label-input100"><h5>Seleccione Fecha<h5></span>
                          <hr>
                          <div class="form-group">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-left" id="datepicker" name ="f_date">
                              </div>
                              <!-- /.input group -->
                            </div>
                           </div>

                           <div class="col-md-9">
                             <span class="label-input100"><h5>Seleccione Tres Palabras claves<h5></span>
                              <hr>
                              <div class="form-group">
                              <div class="row">
                                <div class="col-md-4">
                                   <input class="form-control" id="focusedInput" type="text" value="" name="keyword1">
                                </div>
                                <div class="col-md-4">
                                   <input class="form-control" id="focusedInput" type="text" value="" name="keyword2" >
                                </div>
                                <div class="col-md-4">
                                   <input class="form-control" id="focusedInput" type="text" value="" name="keyword3">
                                </div>
                              </div>

                            </div>
                           </div>
                         </div>

                        </div>




                          <div class="container-contact100-form-btn rs1-wrap-input100">
                            <button class="contact100-form-btn" type="submit">
                              <span>
                                Publicar Comunicado
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                              </span>
                            </button>
                          </div>
                       {!! Form::close() !!}
                    </div>
                  </div>


@endsection

@section('javascript')

  <script src="{{ url('adminlte/js/fileinput.min.js') }}"></script>
  <script src="{{ url('adminlte/js/fileinput.js') }}"></script>

  <script src="{{ url('adminlte/js/bootstrap-datepicker.min.js') }}"></script>
  <!-- CkEditor -->
  <script src="{{ url('carnaval/plugin/ckeditor/ckeditor.js') }}"></script>

  <script type="text/javascript">

    $(function () {
         alert('hola');

         $('div.alert').not('.alert-important').delay(3000).fadeOut(350);

        date= new Date;

         $('#datepicker').datepicker({
               autoclose: true,minDate:  date
         });

        CKEDITOR.replace('editor1');


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

         $("#destiny").hide(7000);

    });


  </script>
