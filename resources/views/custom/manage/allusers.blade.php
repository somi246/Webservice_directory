@extends('layouts.custom')

@section('title')
  <title>All users</title>
@endsection 
@section('content')
  @include('custom_inc.navtab')

<hr>

<div class="container">

                 
        <table class="table table-bordered table striped table-hover text center">
          <thead>
            <tr>
              <th>Name</th>
              
              <th>Date Submitted</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a class="nav-link" href="">{{$profile->name}}</td>
              
              <td><a class="nav-link" href="">01/20/2020</td>
            </tr>
            
          </tbody>
        </table>
      </div>
      
      </body>
      </html>
      
      </div>
      
      </body>
      </html>
  
 </div>
@endsection
