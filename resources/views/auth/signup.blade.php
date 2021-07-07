@extends('layouts.main')
@section('title', " - Sign Up")
@section('html')
    <div class="container">
        <div class="row justify-content-between px-3">
            <div class="col-sm-6 col-xs-12 offset-sm-3 mt-4 py-3 rounded-3"
                style="background-color: #60c; display: block;">
                <div class="text-center">
                    <h1>Sign Up in Votate!</h1>
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
                            <div class="form-group mb-4">
                                <label for="">
                                    <span>Email</span>
                                </label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group mb-4">
                                <label for="">
                                    <span>Repeat Email</span>
                                </label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group  mb-4">
                                <label for="">
                                    <span>Password</span>
                                </label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group  mb-4">
                                <label for="">
                                    <span>Repeat password</span>
                                </label>
                                <input type="password" class="form-control">
                            </div>
                            <a href="#" id="clear__data" class="btn btn-danger">Clear Data</a>
                            <button type="submit" class="btn btn-success float-end">Sign Up!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $('#clear__data').click(function(e),{
        e.preventDefault();

    });
</script>
@endsection