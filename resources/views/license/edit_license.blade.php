@extends('temps.header')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Edit License</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">License</li>
        <li class="active">Dashboard</li>
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
                <form class="form-horizontal" action="" method="post">
                {{csrf_field()}}
                <div class="box-body">
                    <!-- Valor id de empresa  -->
                    <input type="hidden" value="" name="company">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Name" value="" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLastName" class="col-sm-2 control-label">Last name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Last name" value="}" name="lastname" required>
                        </div>
                    </div>
        
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href=""><input type="button" value="Cancel" class="btn btn-danger"></a>
                    <input type="submit" value="Add"  class="btn btn-success "></button>
                </div>
                <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@endsection
