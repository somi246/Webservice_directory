@extends('layouts.custom')

@section('title')
  <title>Pending Profiles</title>
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
              
              <td><a class="nav-link" href="">01/22/2022</td>
            </tr>
            <tr>
              <td>Mary</td>
             
              <td>1/23/2019</td>
            </tr>
            <tr>
              <td>July</td>
            
              <td>12/23/2019</td>
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
