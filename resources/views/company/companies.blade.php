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
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Companies</li>
            </ol>
        </section>
        <div class="col-md-12 col-sm-12 col-xs-12">
            @if (session('editar'))
                <div class="alert alert-success" aria-label="Close">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p><strong>Success! <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i></strong> {{ session('editar') }}</p>
                </div>
            @endif
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            @if (session('eliminar'))
                <div class="alert alert-success" aria-label="Close">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p><strong>Success! <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i></strong> {{ session('eliminar') }}</p>
                </div>
            @endif
        </div>
        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="box-header">
                    <a href="{{-- route('show.companies') --}}" class="btn btn-danger">Back</a>
                    <a href="{{-- route('add.user',$id) --}}" class="btn btn-success">Add company</a>
                </div>
                @foreach($companies as $company)
                    <div class="col-md-4 col-sm-12 col-xs-12">
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
                                    <li><a href="{{ route('show.users',$company->id) }}">Users</a></li>
                                    <li><a href="{{ route('edit.company',$company->id) }}">Edit</a></li>
                                    <li><a href="{{ route('delete.company',$company->id) }}" onclick="return confirm('Are you sure you want to delete this company?\nDeleting will cause all users and license to be deleted')">Delete </span></a></li>
                                </ul>
                            </div>  
                        </div>
                    </div>   
                @endforeach
            </div>
        </section>
    </div>
@endsection

