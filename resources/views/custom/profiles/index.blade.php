@extends('layouts.custom')

@section('title')
  <title>Profile</title>
@endsection  

@section('content')
    @if(!empty($profile))
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" class="form-control" disabled="disabled" value="{{$profile->name}}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" disabled="disabled" value="{{$profile->email}}">
        </div>
        
        <div class="form-group">
            <label for="username">Username</label>
            <input id="username" type="text" class="form-control" disabled="disabled" value="{{$profile->username}}">
        </div>  

        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" type="text" class="form-control" disabled="disabled" value="{{$profile->title}}">
        </div>

        <div class="form-group">
            <label for="short_title">Short Title</label>
            <input id="short_title" type="text" class="form-control" disabled="disabled" value="{{$profile->short_title}}">
        </div>

        <div class="form-group">
            <label for="department">Department</label>
            <input id="department" type="text" class="form-control" disabled="disabled" value="{{$profile->department}}">
        </div>
        
        <div class="form-group">
            <label for="phone">Phone</label>
            <input id="phone" type="text" class="form-control" disabled="disabled" value="{{$profile->phone}}">
        </div>
        
        <div class="form-group">
            <label for="phone_type">Phone Type</label>
            <input id="phone_type" type="text" class="form-control" disabled="disabled" value="{{$profile->phone_type}}">
        </div>      

        <div class="form-group">
            <label for="office_location">Office Location</label>
            <input id="office_location" type="text" class="form-control" disabled="disabled" value="{{$profile->office_location}}">
        </div>   

        <div class="form-group">
            <label for="website">Website</label>
            <input id="website" type="text" class="form-control" disabled="disabled" value="{{$profile->website}}">
        </div>

        <div class="form-group">
            <label for="skype_username">Skype Username</label>
            <input id="skype_username" type="text" class="form-control" disabled="disabled" value="{{$profile->skype_username}}">
        </div>   

        <div class="form-group">
            <label for="img">Img</label>
            <input id="img" type="text" class="form-control" disabled="disabled" value="{{$profile->img}}">
        </div>
        
        <div class="form-group">
            <label for="office_hour">Office Hours</label>
            <input id="office_hour" type="text" class="form-control" disabled="disabled" value="{{$profile->office_hour}}">
        </div>   

        <div class="form-group">
            <label for="bio">Bio</label>
            <input id="bio" type="text" class="form-control" disabled="disabled" value="{{$profile->bio}}">
        </div>
        
        <div class="form-group">
            <label for="degree_type">Degree Type</label>
            <input id="degree_type" type="text" class="form-control" disabled="disabled" value="{{$profile->degree_type}}">
        </div> 
        
        <div class="form-group">
            <label for="degree_school">Degree School</label>
            <input id="degree_school" type="text" class="form-control" disabled="disabled" value="{{$profile->degree_school}}">
        </div>  


    @else
        <p>No profiles found</p>
    @endif
@endsection