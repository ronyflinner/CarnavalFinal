@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <section class="content">
          <!-- general form elements -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Buscar Comunicados</h3>
            </div>
        <div class="box">
          <div class="box-header">
             <h5>Seleccionar opcion de busqueda :</h5>
          </div>
        </div>
       <div class="row">
        <div class="col-md-2">
        </div>
         <div class="col-md-4" >
           <div class="[ form-group ]" id="title" >
                <input type="checkbox" name="fancy-checkbox-primary" id="fancy-checkbox-primary" autocomplete="on" class="che1"  />
                <div class="[ btn-group ]">
                    <label for="fancy-checkbox-primary" class="[ btn btn-primary ]">
                        <span id="1on" class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                    <label for="fancy-checkbox-primary" class="[ btn btn-default active ]">
                        Buscar comunicado por título
                    </label>
                </div>
            </div>
         </div>
         <div class="col-md-2"></div>
         <div class="[ form-group ]" id="date1">
            <input type="checkbox" name="fancy-checkbox-info" id="fancy-checkbox-info" autocomplete="off" class="che2" />
            <div class="[ btn-group ]">
                <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                    <span class="[ glyphicon glyphicon-ok ]"></span>
                    <span> </span>
                </label>
                <label for="fancy-checkbox-info" class="[ btn btn-default active ]">
                    Buscar comunicado por fecha
                </label>
            </div>
        </div>
         <div class="col-md-4">

         </div>
       </div>

       <div class="row" style="display: none" id="formu">
         <div class="col-md-3"></div>
         <div class="col-md-4" style="display:none" id="bTitulo">
           <input class="form-control" type="text" placeholder="Escribir titulo del comunicado a buscar" aria-label="Buscar" id='title_p'>
         </div>
         <div class="col-md-4" style="display:none" id="bDate" >
                 <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-left" id="reservation">
                              </div>
                </div>
         <div class="col-md-2">
                <button type="button" class="btn btn-success" id="but">Buscar</button>
         </div>
       </div>



            <div class="box-body">
              <table id="table" class="table table-bordered table-striped  dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"></th>
                        <th>Título de Comunicado</th>
                        <th>Fecha</th>

                    </tr>
                </thead>

                <tbody>

                </tbody>
            </table>
            </div>
            <!-- /.box-body -->
          </div>

          <!-- /.box -->
    </section>

@endsection

@section('javascript')


  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ url('adminlte/css/daterangepicker.css') }}" />

  <script src="{{ url('adminlte/js/moment.min.js') }}"></script>
  <script src="{{ url('adminlte/js/daterangepicker.js') }}"></script>

  <script type="text/javascript">

     $(function () {
            $('#reservation').daterangepicker();
           $("#title").click(function() {

            if($(".che1").is(':checked')) {
                $(".che2").prop("checked", false);
                $(".che1").prop("checked", true);
                $('#bDate').css("display","none")
                $('#formu').css('display','block');
                $('#bTitulo').css('display', 'block');
            } else {
                $(".che1").prop("checked", false);
                $('#formu').css('display','none');

            }
          });

          $("#date1").click(function() {

            if($(".che2").is(':checked')) {
                $(".che1").prop("checked", false);
                $(".che2").prop("checked", true);
                $('#formu').css('display','block');
                $('#bTitulo').css('display', 'none');
                $('#bDate').css("display","block");
            } else {
                $(".che2").prop("checked", false);
                $('#formu').css('display','none');

            }
          });
    });
  </script>

  <script type="text/javascript">

     var vurl='{{ route('admin.comunicadosearch.create')}}';
      //$('#table').DataTable();


      var greet = function(vurl,data1) {
         $('#table').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax:{
                            url:vurl ,
                            type:'get',
                            data:{'data1' : data1},
                        } ,
                         language: {
                            url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json'
                         },
                        columns: [
                            {data: 'id', name:'id','orderable': false},
                            {data: 'title', name:'title'},
                            {data: 'publish', name:'publish'},
                        ],
                        bAutoWidth: false,
                        order: [[0, 'asc']],
                        'aaSorting': [],


                    });


         };

         greet(vurl,0);


    $('#but').click(function () {
          $('#table').dataTable().fnDestroy();

          var title = $('title_p').val();
          var vurl='{{ route('admin.comunicadosearch.store')}}';
          greet(vurl,title);


        });


  </script>
@endsection