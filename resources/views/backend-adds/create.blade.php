@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {!! Form::open(['route' => 'adds.store']) !!}
                @include('backend-adds.form', ['submitButton' => 'Create'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
