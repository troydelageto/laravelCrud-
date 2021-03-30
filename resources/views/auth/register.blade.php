@extends('layouts.app')

@section('content')
<div class="container register-form my-3">
            <div class="form">
                <div class="note">
                    <p>This is a simpleRegister Form made using Boostrap.</p>
                </div>

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="needs-validation" action="{{route('register')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control is-valid" id="validationServer05"  required placeholder="Your Name *" value="{{old('username')}}"/>
                                <!-- @error('username') -->
                                    <div  class="invalid-feedback">please enter name</div>
                                <!-- @enderror -->
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phoneNumber" placeholder="Phone Number *" value="" required/>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Enter Email *" value="" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="password" placeholder="Your Password *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="password_confirmation" placeholder="Confirm Password *" value="" required/>
                            </div>
                        </div>
                    </div>
                    <button  type="submit" class="btnSubmit btn-lg">Register</button>

                    </form>
                </div>
            </div>
        </div>

@endsection
