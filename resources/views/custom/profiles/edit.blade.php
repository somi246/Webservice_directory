@extends('layouts.custom')

@section('title')
  <title>Edit Profile</title>
@endsection

@section('content')
    <h1>Edit Profile</h1>
    {!! Form::open(['action' => ['ProfilesTestController@update',$profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $profile->name, ['class' => 'form-control', 'readonly', 'placeholder' => 'name'])}}
        </div>
       
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $profile->email, ['class' => 'form-control', 'readonly' , 'placeholder' => 'email'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('username', 'Username')}}
            {{Form::text('username', $profile->username, ['class' => 'form-control', 'readonly' , 'placeholder' => 'username'])}}
        </div>

        
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $profile->title, ['class' => 'form-control', 'readonly' , 'placeholder' => 'title'])}}
        </div>

        
        <div class="form-group">
            {{Form::label('short_title', 'Short title')}}
            {{Form::text('short_title', $profile->short_title, ['class' => 'form-control', 'placeholder' => 'short_title'])}}
        </div>
        
        
        <div class="form-group">
            {{Form::label('department', 'Department')}}
            {{Form::text('department', $profile->department, ['class' => 'form-control' , 'placeholder' => 'dept'])}}
        </div>
        

        <div class="form-group">
            {{Form::label('phone', 'Phone')}}
            {{Form::text('phone', $profile->phone, ['class' => 'form-control', 'placeholder' => 'phone'])}}
        </div>

        <div class="form-group">
            {{Form::label('phone_type', 'Phone Type')}}
            {{Form::text('phone_type', $profile->phone_type, ['class' => 'form-control', 'placeholder' => 'phone'])}}
        </div>
        

        <div class="form-group">
            {{Form::label('office_location', 'Office Location')}}
            {{Form::text('office_location', $profile->office_location, ['class' => 'form-control', 'placeholder' => 'office location'])}}
        </div>


        
        <div class="form-group">
            {{Form::label('website', 'Website')}}
            {{Form::text('website', $profile->website, ['class' => 'form-control', 'placeholder' => 'website'])}}
        </div>
        

        <div class="form-group">
            {{Form::label('skype_username', 'Skype Username')}}
            {{Form::text('skype_username', $profile->skype_username, ['class' => 'form-control', 'placeholder' => 'skype_username'])}}
        </div>
        

        <div class="form-group">
            {{Form::label('img', 'Image')}}
            {{Form::text('img', $profile->img, ['class' => 'form-control', 'placeholder' => 'img'])}}
        </div>
       

        <div class="form-group">
            {{Form::label('office_hour', 'Office hours')}}
            {{Form::text('office_hour', $profile->office_hour, ['class' => 'form-control', 'placeholder' => 'office hours'])}}
        </div>
       

        <div class="form-group">
            {{Form::label('bio', 'Bio')}}
            {{Form::text('bio', $profile->bio, ['class' => 'form-control', 'placeholder' => 'bio'])}}
        </div>
       

        <div class="form-group">
            {{Form::label('degree_type', 'Degree Type')}}
            {{Form::text('degree_type', $profile->degree_type, ['class' => 'form-control', 'placeholder' => 'degree type'])}}
        </div>
       

        <div class="form-group">
            {{Form::label('degree_school', 'Degree school')}}
            {{Form::text('degree_school', $profile->degree_school, ['class' => 'form-control', 'placeholder' => 'degree_school'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection