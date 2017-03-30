<div class="form-group row">
    {!! Form::label('title', 'Title', ['class'=>'col-lg-2 col-form-label']) !!}
    <div class="col-lg-10">
        {!! Form::text('title',null,['class'=> 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('description', 'Description', ['class'=>'col-lg-2 col-form-label']) !!}
    <div class="col-lg-10">
        {!! Form::textarea('description',null,['class'=> 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('price', 'Price', ['class'=>'col-lg-2 col-form-label']) !!}
    <div class="col-lg-10">
        {!! Form::number('price',null,['class'=> 'form-control','step'=>'0.01']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('city', 'City', ['class'=>'col-lg-2 col-form-label']) !!}
    <div class="col-lg-10">
        {!! Form::text('city',null,['class'=> 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-lg-10">
        {!! Form::submit($submitButton, ['name' => 'submit', 'class' => 'col-lg-offset-2 btn btn-primary']) !!}
    </div>
</div>