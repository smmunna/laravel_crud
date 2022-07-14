@extends('layout.main')
@section('content')
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <section id="sec2">
        <div class="container">
            <div class="row row2">
                <div class="col-lg-12">
                    <table border="1" class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Operation</th>
                        </tr>
                        @foreach ($data as $item )
                            <tr>
                                <td>{{$item['id']}}</td>
                                <td>{{$item['name']}}</td>
                                <td>{{$item['email']}}</td>
                                <td>
                                    <a href="/edit/{{$item['id']}}">Edit</a>
                                    <a href="/delete/{{$item['id']}}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div style="display: flex;justify-content:center;">
                        {{$data->links()}}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
