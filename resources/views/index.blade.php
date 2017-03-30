@extends('layouts.app')

@section('content')
    <!-- Page Content -->
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
                <div class="row carousel-holder">
                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://lorempixel.com/800/300/business/" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://lorempixel.com/800/300/nature/" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://lorempixel.com/800/300/technics/" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if($advertisements->count())
                    <div class="row">
                        @foreach($advertisements as $add)

                            <div class="col-sm-4 col-lg-4 col-md-4">
                                <div class="thumbnail">
                                    <img src="http://lorempixel.com/320/150/technics/" alt="">
                                    <div class="caption">
                                        <h4 class="pull-right">{{$add->price}} €</h4>
                                        <h4>
                                            <a href="{{route('show-advertisement', $add->slug)}}">{{str_limit($add->title, 15)}}</a>
                                        </h4>
                                        <p>{{str_limit($add->description, 80)}}</p>
                                    </div>
                                    <div class="ratings">
                                        <p class="pull-right">{{$add->users->name}}</p>
                                        <p>
                                            {{$add->created_at->format('Y-m-d')}}
                                        </p>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                    <div class="row">
                        <div class="col-lg-12">{{ $advertisements->links() }}</div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- /.container -->
@endsection