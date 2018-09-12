@extends('layouts.app')

@section('content')
  <h1>Contact</h1>
  {!! Form::open(['url' => 'contact/sendMsg','class'=>'form-horizontal']) !!}
  <div class="form-group">
    {{ Form::label('Name :', null, ['class' => 'control-label']) }}
    {{ Form::text('name', '',(['class' => 'form-control','placeholder'=>'Enter Name'])) }}
  </div>
  <div class="form-group">
    {{ Form::label('E-mail :', null, ['class' => 'control-label']) }}
    {{ Form::email('email', '',(['class' => 'form-control','placeholder'=>'Enter E-mail'])) }}
  </div>
  <div class="form-group">
    {{ Form::label('Message :', null, ['class' => 'control-label']) }}
    {{ Form::textarea('message', '',(['class' => 'form-control','placeholder'=>'Enter Your Message'])) }}
  </div>
  <div class="form-group">
    {{ Form::submit('Send Message',array('class'=>'btn btn-primary')) }}
  </div>
  {!! Form::close() !!}
@endsection
