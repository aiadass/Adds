@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p class="lead">Adds categories</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>
            <div class="col-md-9">
                <h1>My Advertisements</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th> Title</th>
                        <th> Description</th>
                        <th> Price </th>
                        <th> Posted at</th>
                        <th> Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($advertisements as $advertisement)
                        <tr>
                            <td>{{$advertisement->title}}</td>
                            <td>{{substr($advertisement->description, 0, 80)}}</td>
                            <td>{{$advertisement->price}}</td>
                            <td>{{$advertisement->created_at}}</td>
                            <td><a href="{{ route('adds.edit', $advertisement->id)  }}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection