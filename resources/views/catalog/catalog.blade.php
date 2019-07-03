@extends('temps.header')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>User catalog</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Catalog</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-6 ">
        @if (session('user_catalog'))
        <div class="alert alert-success alert-success-style1">
            <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                <span class="icon-sc-cl" aria-hidden="true">&times;</span>
            </button>
            <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
            <p><strong>Success!</strong> {{ session('user_catalog') }}</p>
        </div>
        @endif
        @if (session('delete_catalog'))
        <div class="alert alert-success alert-success-style1">
            <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                <span class="icon-sc-cl" aria-hidden="true">&times;</span>
            </button>
            <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
            <p><strong>Success!</strong> {{ session('delete_catalog') }}</p>
        </div>
        @endif
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add more users</h3>
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('add.catalog') }}" method="post">
                {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputQuantity" class="col-sm-2 control-label">Quantity</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="5" name="quantity" required>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info">Add</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
        <div class="col-lg-6 ">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">User Catalog</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Users</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($user_catalog as $catalog)
                        <tr>
                            <td>{{ $catalog->quantity }}</td>
                            <td><a href="{{ route('delete.catalog',$catalog->id) }}" onclick="return confirm('Are you sure you want to delete this item?')"><button class="btn  btn-danger" >Delete</button></a></td>
                        </tr>
                        @endforeach
                        </tfoot>
                    </table>
                    {!! $user_catalog->render() !!}
                </div>
            </div>
        </div>   
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@endsection