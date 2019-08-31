@extends('layouts.register')

@section('content')
    @include('layouts.partial.msg')
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration</h2>


                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="name">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email Address" name="email">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Contact Number" name="phone">
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input  type="date" placeholder="BIRTHDATE" name="dob">
                                </div>
                            </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Designation" name="designation">
                        </div>

                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="gender">
                                        <option disabled="disabled" selected="selected">GENDER</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="blood">
                                        <option disabled="disabled" selected="selected">Blood Group</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nationality" name="nationality">
                        </div>
                        </div>

                        <div class="row row-space">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Present Address" name="present_address">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Permanent Address" name="permanent_address">
                        </div>
                        </div>

                        <div class="row row-space">
                        <div class="input-group">

                            <div class="col-md-6">
                                <input id="password" type="password" class="input--style-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>
                        </div>

                                <div class="p-t-20">
                                    <button class="btn btn--radius btn--green" type="submit">Register</button>
                                </div>
                    </form>
                </div>
            </div>
                </div>
            </div>

        </div>
@endsection
