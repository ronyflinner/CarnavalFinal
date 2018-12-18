@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
         <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Información recien agregada</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Orden</th>
                    <th>Tipo</th>
                    <th>Titulo</th>
                    <th>Fecha</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td><span class="label label-success">Noticia</span></td>
                    <td>titulo de noticia 1</td>
                    <td>07/12/12</td>

                  </tr>
                  <tr>
                   <td>2</td>
                    <td><span class="label label-success">Noticia</span></td>
                    <td>titulo de noticia 1</td>
                    <td>07/12/12</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><span class="label label-success">Noticia</span></td>
                    <td>titulo de noticia 1</td>
                    <td>07/12/12</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><span class="label label-success">Noticia</span></td>
                    <td>titulo de noticia 1</td>
                    <td>07/12/12</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td><span class="label label-success">Noticia</span></td>
                    <td>titulo de noticia 1</td>
                    <td>07/12/12</td>
                  </tr>
                  <tr>
                   <td>6</td>
                    <td><span class="label label-success">Noticia</span></td>
                    <td>titulo de noticia 1</td>
                    <td>07/12/12</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td><span class="label label-success">Noticia</span></td>
                    <td>titulo de noticia 1</td>
                    <td>07/12/12</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

    </div>
    <div class="col-md-6">
        <div class="card">
                    <div class="card-body">
                        <div class="card-block">
                            <div class="media">
                                <div class="media-body text-xs-left">
                                    <h3 class="pink">388</h3>
                                    <span>Números de Clientes</span>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="icon-bag2 pink font-large-2 float-xs-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </div>

</div>


@endsection
