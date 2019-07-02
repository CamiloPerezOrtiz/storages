@extends('temps.header')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Companies</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Companies</li>
      </ol>
    </section>
    @if (session('editar'))
    <div class="alert alert-success alert-success-style1">
        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
        </button>
        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
        <p><strong>Success!</strong> {{ session('editar') }}</p>
    </div>
    @endif
    @if (session('eliminar'))
    <div class="alert alert-success alert-success-style1">
        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
        </button>
        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
        <p><strong>Success!</strong> {{ session('eliminar') }}</p>
    </div>
    @endif
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        @foreach($companies as $company)
        <div class="col-md-4 ">
          <!-- small box -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="" src="img/warriors.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">{{ $company->name }}</h3>
              <h5 class="widget-user-desc">Lead Developer</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="{{ route('show.users',$company->id) }}">Users <span></a></li>
                <li><a href="{{ route('edit.company',$company->id) }}"">Edit <span></a></li>
                <li><a href="{{ route('delete.company',$company->id) }}" onclick="return confirm('Are you sure you want to delete this company?\nDeleting will cause all users and license to be deleted')">Delete </span></a></li>
              </ul>
            </div>
          </div>
        </div>   
        @endforeach
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

