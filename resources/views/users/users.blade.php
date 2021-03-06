@extends('temps.header')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Company</li>
        <li class="active">Users</li>
      </ol>
    </section>
    @if (session('agregar'))
    <div class="alert alert-success alert-success-style1">
        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
        </button>
        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
        <p><strong>Success!</strong> {{ session('agregar') }}</p>
    </div>
    @endif
    @if (session('eliminarr'))
    <div class="alert alert-success alert-success-style1">
        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
        </button>
        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
        <p><strong>Success!</strong> {{ session('eliminar') }}</p>
    </div>
    @endif
    @if (session('editar'))
    <div class="alert alert-success alert-success-style1">
        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
        </button>
        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
        <p><strong>Success!</strong> {{ session('editar') }}</p>
    </div>
    @endif
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      <div class="col-xs-12">
        <div class="box box-warning">
            <div class="box-header">
                <a href="{{ route('show.companies') }}"><button class="btn btn-primary">Back</button></a>
                <a href="{{ route('add.user',$id) }}""><button class="btn btn-success">Add user</button></a>
            </div>
                <!-- /.box-header -->
            <div class="box-body">
                <table id="example" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Space</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($company_users as $users)
                        <tr>
                            <td>{{ $users->name  }}</td>
                            <td>{{ $users->lastname  }}</td>
                            <td>{{ $users->email  }}</td>
                            <td>{{ $users->space  }}</td>
                            <td>{{ $users->role  }}</td>
                            <td>
                            <center><a href="{{ route('edit.user',$users->id) }}"><button class="btn  btn-warning">Edit</button></a>
                                    <a href="{{ route('delete.user',$users->id) }}" onclick="return confirm('Are you sure you want to delete this user?\nAll data will be deleted!')"><button class="btn  btn-danger" >Delete</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tfoot>
                </table>
                {!! $company_users->render() !!}
                </div>
                <!-- /.box-body -->
            </div> 
        </div>   
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section ('file_js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable( {
                responsive: true
            });
            new $.fn.dataTable.FixedHeader( table );
        });
        window.setTimeout(function() {
            $(".alert").fadeTo(300, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);
    </script>
@stop

