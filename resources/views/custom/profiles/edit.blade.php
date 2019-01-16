 
@extends('layouts.custom')

@section('title')
  <title>Edit Profile</title>
@endsection 

@section('content')
    <h1>Edit Profile</h1>
    {!! Form::open(['action' => ['ProfilesTestController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Name', 'Name')}}
            {{Form::text('name', $profile->name, ['class' => 'form-control', 'readonly', 'placeholder' => 'name'])}}
        </div>
        {!! Form::open(['action' => ['ProfilesTestController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Email', 'Email')}}
            {{Form::text('email', $profile->email, ['class' => 'form-control', 'readonly' , 'placeholder' => 'email'])}}
        </div>
        {!! Form::open(['action' => ['ProfilesTestController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Username', 'Username')}}
            {{Form::text('username', $profile->email, ['class' => 'form-control', 'readonly' , 'placeholder' => 'username'])}}
        </div>
        {!! Form::open(['action' => ['ProfilesTestController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Title', 'Title')}}
            {{Form::text('title', $profile->title, ['class' => 'form-control', 'readonly' , 'placeholder' => 'title'])}}
        </div>
        {!! Form::open(['action' => ['ProfilesTestController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Short title', 'Short title')}}
            {{Form::text('short_title', $profile->short_title, ['class' => 'form-control', 'placeholder' => 'short_title'])}}
        </div>
        {!! Form::open(['action' => ['ProfilesTestController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Department', 'Department')}}
            {{Form::text('department', $profile->department, ['class' => 'form-control' , 'placeholder' => 'dept'])}}
        </div>
        {!! Form::open(['action' => ['ProfilesTestController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Phone', 'Phone')}}
            {{Form::text('phone', $profile->phone, ['class' => 'form-control', 'placeholder' => 'phone'])}}
        </div>
        {!! Form::open(['action' => ['ProfilesTestController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Office Location', 'Office Location')}}
            {{Form::text('office_location', $profile->office_location, ['class' => 'form-control', 'placeholder' => 'office location'])}}
        </div>
        {!! Form::open(['action' => ['ProfilesTestController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Website', 'Website')}}
            {{Form::text('website', $profile->office_location, ['class' => 'form-control', 'placeholder' => 'website'])}}
        </div>
        {!! Form::open(['action' => ['ProfilesTestController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Skype Username', 'Skype Username')}}
            {{Form::text('skype_username', $profile->skype_username, ['class' => 'form-control', 'placeholder' => 'skype_username'])}}
        </div>
        {!! Form::open(['action' => ['ProfilesTestController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Image', 'Image')}}
            {{Form::text('img', $profile->img, ['class' => 'form-control', 'placeholder' => 'img'])}}
        </div>
        {!! Form::open(['action' => ['ProfilesTestController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Office hours', 'Office hours')}}
            {{Form::text('office_hour', $profile->office_hour, ['class' => 'form-control', 'placeholder' => 'office hours'])}}
        </div>
        {!! Form::open(['action' => ['ProfilesTestController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Bio', 'Bio')}}
            {{Form::text('bio', $profile->bio, ['class' => 'form-control', 'placeholder' => 'bio'])}}
        </div>
        {!! Form::open(['action' => ['ProfilesTestController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Degree Type', 'Degree Type')}}
            {{Form::text('degree_type', $profile->degree_type, ['class' => 'form-control', 'placeholder' => 'degree type'])}}
        </div>
        {!! Form::open(['action' => ['ProfilesTestController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Degree school', 'Degree school')}}
            {{Form::text('degree_school', $profile->degree_school, ['class' => 'form-control', 'placeholder' => 'degree_school'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection