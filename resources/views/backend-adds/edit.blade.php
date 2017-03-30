@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! Form::model($advertisement, ['route' => ['adds.update', $advertisement->getRouteKey()], 'method' => 'put']) !!}
                @include('backend-adds.form',['submitButton' => 'SAVE'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
@endsection