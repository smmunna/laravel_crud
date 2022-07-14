@extends('layout.main')
@section('content')
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <section id="sec2">
        <div class="container">
            <div class="row row2">
                <div class="col-lg-12">
                    <h2 style="text-align: center">Update your Data</h2>
                    <hr>
                    <div class="createform">
                        <form action="/edit" method="post">
                            @csrf
                            @foreach ($data as $item )


                            <div class="mb-3">
                                <label for="" class="form-label">Id</label>
                                <input type="text" class="form-control" name="id" id="" value="{{$item['id']}}">
                                <span style="color: red;">
                                    @error('id')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$item['name']}}">
                                <span style="color: red;">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$item['email']}}">
                                <span style="color: red;">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                            </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
