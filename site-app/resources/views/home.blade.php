@extends('template.default')
@section('title','Login')
@section('main')
    <div class="container">
        <div class="row  row-cols-2gx-5 m-5">

            <div class="col-sm-6 p-4">
                <h1 class="mb-4">Login</h1>
                <form class="row g-3 border border-secondary rounded p-5">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password2" class="form-label">Password 2</label>
                        <input type="password2" class="form-control" id="password2">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-secondary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection