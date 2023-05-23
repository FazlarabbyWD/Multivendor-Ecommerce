@extends('vendor.master')
@section('vendor')



<div class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
<div class="breadcrumb-title pe-3">User Profile</div>
<div class="ps-3">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
    </ol>
</nav>
</div>

<!-- <div class="ms-auto">
<div class="btn-group">
    <button type="button" class="btn btn-primary">Settings</button>
    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
        <a class="dropdown-item" href="javascript:;">Another action</a>
        <a class="dropdown-item" href="javascript:;">Something else here</a>
        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
    </div>
</div>
</div> -->
</div>
<!--end breadcrumb-->
<div class="container">
<div class="main-body">
<div class="row">
    <div class="col-lg-10 offset-lg-1 my-4">
        @if (session('successStatus'))
        <div class="alert alert-success">{{session('successStatus')}}</div>
        @elseif (session('error'))
        <div class="alert alert-warning">{{session('error')}}</div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{route('vendor.update.password')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Old Password</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input name="old_password" id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror " placeholder="Old Password" />
                            @error('old_password')

                            <span class="text-danger">{{$message}}</span>

                            @enderror

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">New Password</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input name="new_password" id="new_password" type="password" class="form-control @error('new_password') is-invalid  @enderror  " placeholder="New Password" />
                            @error('new_password')
                            <span class="text-danger">{{$message}}</span>

                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Confirm New Password</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input name="new_password_confirmation" id="new_password_confirmation" type="password" class="form-control" placeholder="Confirm New Password" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 text-secondary">
                            <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div>
<script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>


@endsection
