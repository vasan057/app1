@extends('Layouts.app')
@section('title')
    @parent
    Instructor
@stop
@push('style')
  <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap.min.css')}}">
@endpush
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Vorname</th>
                  <th>Anrede/Titel</th>
                  <th>Telefon</th>
                  <th>Bundesland</th>
                  <th>Aktion</th>
                </tr>
                </thead>
                <tbody>
                @foreach($instructorget as $fetch)
                <tr>
                  <td>{{$fetch->name}}</td>
                  <td>{{$fetch->email}}</td>
                  <td>{{$fetch->phone}}</td>
                  <td>{{$fetch->city}}</td>
                  <td>
                  	 <span data-title="Delete"><a href="#"> <i class="label label-danger glyphicon glyphicon-trash btn delete_employee" data-id="{{$fetch->id}}"> </i></a></span>
		            <!-- <td><a href="mycontact.html"><p class="label-danger contact_status">Deactive</p></a></td> -->
		            <span data-title="Edit"><a href="{{route('editInstructor',['id'=>$fetch->id])}}"><i class="fa fa-pencil btn btn-sm btn-success edit_employee" data-id="{{$fetch->id}}" ></i></a></span>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                   <th>Vorname</th>
                  <th>Anrede/Titel</th>
                  <th>Telefon</th>
                  <th>Bundesland</th>
                  <th>Aktion</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@stop
@push('foot')
<script src="{{ asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endpush