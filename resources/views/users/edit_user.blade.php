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
        <li class="active">Users</li>
        <li class="active">Edit User</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Update user information</h3>
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
                <form class="form-horizontal" action="{{ route('editUserPost',$user->id) }}" method="post">
                {{csrf_field()}}
                    <div class="box-body">
                        <!-- Valor id de empresa  -->
                        <input type="hidden" value="{{ $user->company_id }}" name="company">
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Name" value="{{ $user->name }}" name="name" required>
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="inputLastName" class="col-sm-2 control-label">Last name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Last name" value="{{ $user->lastname }}" name="lastname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{ $user->email }}" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSpace" class="col-sm-2 control-label">Assign Space</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" value="{{ $user->space }}" name="space" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputRole" class="col-sm-2 control-label">User Role</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="role" id="" required>
                                <option value="USER" @if($user->tipo_usuario == 'USER') selected @endif>User</option>
                                <option value="ADMIN" @if($user->tipo_usuario == 'ADMIN') selected @endif>Administrator</option>
                            </select>
                        </div>
                    </div>
                </div>
                 <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('show.users',$user->company_id) }}"><input type="button" value="Cancel" class="btn btn-danger"></a>
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
