@extends('temps.header')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Edit User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Company</li>
        <li class="active">Edit Company</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Update company information</h3>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('editCompanyPost',$company->id) }}" method="post">
                {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Name" value="{{ $company->name }}" name="name" required>
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="inputLastName" class="col-sm-2 control-label">Last name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Last name" value="{{ $company->rfc }}" name="rfc" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSpace" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="{{ $company->address}}" name="address" required>
                        </div>
                    </div>
                </div>
                 <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('show.companies') }}"><input type="button" value="Cancel" class="btn btn-danger"></a>
                    <input type="submit" value="Add"  class="btn btn-success "></button>
                </div>
                <!-- /.box-footer -->
                </form>
            </div>
        </div>                                                                                                                                                                                                                                                                                                              </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
