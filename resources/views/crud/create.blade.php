@extends('layout.main')
@section('content')
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <section id="sec2">
        <div class="container">
            <div class="row row2">
                <div class="col-lg-12">
                    <h2 style="text-align: center">Insert your Data here</h2>
                    <hr>
                    <div class="createform">
                        <form action="/create" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Id</label>
                                <input type="text" class="form-control" name="id" id=""
                                    placeholder="name@example.com">
                                <span style="color: red;">
                                    @error('id')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="SM.Munna">
                                <span style="color: red;">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="20103019@iubat.edu">
                                <span style="color: red;">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                                <span style="color: red;">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
