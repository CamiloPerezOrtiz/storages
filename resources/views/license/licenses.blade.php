@extends('temps.header')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Licenses</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Licenses</li>
            </ol>
        </section>
        @if (session('eliminar'))
            <div class="alert alert-success alert-success-style1">
                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                    <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                </button>
                <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                <p><strong>Success!</strong> {{ session('eliminar') }}</p>
            </div>
        @endif
        <div class="box-header">
            <a href="{{ route('add.license') }}" class="btn btn-success">Add License</a>
        </div>
        <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-success">
                            <div class="box-header">
                                <h3 class="box-title">All licenses</h3>
                            </div>
                            <!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Serial</th>
                                                <th>Type</th>
                                                <th>Time</th>
                                                <th>Status</th>
                                                <th>End date</th>
                                                <th>Total space</th>
                                                <th>Total Licenses</th>
                                                <th>Space Available</th>
                                                <th>Licenses Available</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($licenses as $license)
                                                <tr>
                                                    <td>{{ $license->name }}</td>
                                                    <td>{{ $license->serial }}</td>
                                                    <td>{{ $license->type }}</td>
                                                    <td>{{ $license->time }}</td>
                                                    <td>{{ $license->status }}</td>
                                                    <td>{{ $license->end_date }}</td>
                                                    <td>{{ $license->total_space }}</td>
                                                    <td>{{ $license->total_license }}</td>
                                                    <td>{{ $license->free_space }}</td>
                                                    <td>{{ $license->free_license }}</td>
                                                    <td>
                                                        <a href="{{ route('edit.license',$license->license_id) }}"><button class="btn  btn-warning"><i class="fa fa-edit"></i></button></a>
                                                        <a href="{{ route('delete.license',$license->license_id) }}" onclick="return confirm('Are you sure you want to delete this license?\nAll data will be deleted including users!')"><button class="btn  btn-danger" ><i class="fa fa-minus"></i></button></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </section>
        <!-- /.content -->
    </div>
@endsection
