@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-1 mb-3 border-bottom">
        <h1 class="h5">User Management </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    {{-- test --}}
    <form class="needs-validation">
        <div class="card card-body">
            <form>
                <h4 class="mb-3 font-size-16 text-black">Create the User Account</h4>
                <div class="row">
                    <div class="col-6 form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="fullname" class="form-control" id="fullname" aria-describedby="fullname"
                            placeholder="Full Name">

                    </div>
                    <div class="col-6 form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 form-group mt-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="col-6 form-group mt-3">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm password" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="form-group form-check mt-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I'am Human</label>
                </div>
                <button type="submit" class="btn btn-primary btn-flat mt-3"><i class="fa fa-save"></i> Add the
                    Account</button>
            </form>
        </div>
    </form>

    {{-- test --}}
@endsection
