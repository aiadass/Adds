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
                <div class="thumbnail">
                    <img class="img-responsive" src="http://lorempixel.com/800/300/nature/" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right">$24.99</h4>
                        <h4>{{$advertisement->title}}</h4>
                        <p>
                            {{$advertisement->description}}
                        </p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">{{$advertisement->updated_at}}</p>
                        <p>
                            {{$advertisement->users->name}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
