@extends('layouts.custom')

@section('title')
  <title>History</title>
@endsection 

@section('content')
  @include('custom_inc.navtab')

<hr>

<div class="container">

                 
        <table class="table table-bordered table striped table-hover text center">
          <thead>
            <tr>
              <th>Name</th>
              
              <th>Activities</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a class="nav-link" href="">{{$profile->name}}</td>
              
              <td><a class="nav-link" href="">Edited profile</td>
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
