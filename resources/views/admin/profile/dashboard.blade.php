@extends('layouts.dashboard')

@section('title','Profile')

@push('css')

@endpush

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Profile
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Users</a></li>
                <li class="active">Profile</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle"  src="{!! asset('uploads/user/'.$users->image) !!}"  alt="User profile picture">

                            <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                            <p class="text-muted text-center  btn-success">{{ $users->designation }}</p>

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Date of Birth</b> <a class="pull-right">{{$users->dob}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="pull-right">{{$users->email}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Contact Number</b> <a class="pull-right">{{ $users->phone }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Address</b> <a class="pull-right">{{ $users->present_address }}</a>
                                </li>
                            </ul>

                            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-block"><b>Dashboard</b></a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->



                    <!-- /.box -->
                </div>
                <!-- /.col -->

                <div class="col-md-9">
                    @include('layouts.partial.msg')
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">

                            <li><a href="#UpdateProfile" data-toggle="tab">Update Profile</a></li>
                        </ul>


                            <div class="tab-pane" id="UpdateProfile">
                                <form class="form-horizontal"  method="POST" action="{{ route('user.update',$users->id) }}" enctype="multipart/form-data">
                                    <div class="form-group">
                                        @csrf
                                        @method('PUT')
                                        <label for="inputName" class="col-sm-2 control-label">Name<small class="text-danger">(required)</small></label>

                                        <div class="col-sm-8">
                                            <input id="name" type="text" class="form-control" value="{{ $users->name }}" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">Email<small class="text-danger">(required)</small></label>

                                        <div class="col-sm-8">
                                            <input id="email" type="email" class="form-control" value="{{ $users->email }}" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Designation<small class="text-danger">(required)</small></label>

                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" value="{{ $users->designation }}" name="designation">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">Contact Number<small class="text-danger">(required)</small></label>

                                        <div class="col-sm-8">
                                            <input type="number" id="phone" class="form-control" value="{{ $users->phone }}" name="phone">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="dob" class="col-sm-2 control-label">Date Of Birth<small class="text-danger">(required)</small></label>
                                        <div class="col-sm-8">
                                            <input type="date" id="dob" class="form-control" value="{{ $users->dob }}" name="dob">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">Gender<small class="text-danger">(required)</small></label>
                                        <div class="col-sm-8">
                                            <input type="text" id="gender" class="form-control" value="{{ $users->gender }}" name="gender">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">Blood<small class="text-success">(optional)</small></label>
                                        <div class="col-sm-8">
                                            <input type="text" id="blood" class="form-control" value="{{ $users->blood }}" name="blood">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">Nationality<small class="text-danger">(required)</small></label>
                                        <div class="col-sm-8">
                                            <input type="text" id="nationality" class="form-control" value="{{ $users->nationality }}" name="nationality">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="present_address" class="col-sm-2 control-label">Present Address<small class="text-danger">(required)</small></label>

                                        <div class="col-sm-8">
                                            <input type="text" id="present_address" class="form-control" value="{{ $users->present_address }}" name="present_address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputpermanentaddress" class="col-sm-2 control-label">Permanent Address<small class="text-danger">(required)</small></label>

                                        <div class="col-sm-8">
                                            <input type="text" id="permanent_address" class="form-control" value="{{ $users->permanent_address }}" name="permanent_address">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputpic" class="col-sm-2 control-label">Profile Pic<small class="text-success">(optional)</small></label>

                                        <div class="col-sm-8">
                                            <input type="file" name="image"><br>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="inputPassword" class="col-sm-2 control-label">Password<small class="text-danger">(required)</small></label>
                                        <div class="col-sm-8">
                                            <input type="password" id="password" class="form-control" value="{{ $users->password }}" name="password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-8">
                                            <button type="submit" class="btn btn-danger">Update</button>
                                        </div>
                                    </div>
                                    <br>
                                </form>
                            </div>
                    </div>
                </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->

               <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
@endsection

@push('scripts')

@endpush