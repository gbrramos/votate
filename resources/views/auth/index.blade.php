@extends('layouts.main')

@section('html')
    <div class="container">
        <div class="row justify-content-between px-3">
            <div class="col-sm-6 col-xs-12 offset-sm-3 mt-4 py-3 rounded-3"
                style="background-color: #60c; display: block;">
                <div class="text-center">
                    <h1>Votate!</h1>
                    <hr>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-8">
                        <form action="">
                            <div class="form-group mb-4">
                                <label for="">
                                    <span>Login</span>
                                </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group  mb-4">
                                <label for="">
                                    <span>Password</span>
                                </label>
                                <input type="password" class="form-control">
                            </div>
                            <a href="{{url('sign-up')}}" class="btn btn-primary">Sign Up</a>
                            <button type="submit" class="btn btn-success float-end">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection