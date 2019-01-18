@extends('layouts.custom')

@section('title')
  <title>All users</title>
@endsection 
@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link" id="pending-tab" data-toggle="tab" href="/manage/pending" role="tab" aria-controls="pending" aria-selected="false">Pending</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="history-tab" data-toggle="tab" href="/manage/history" role="tab" aria-controls="history" aria-selected="false">History</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" id="allusers-tab" data-toggle="tab" href="#" role="tab" aria-controls="allusers" aria-selected="true">All Users</a>
    </li>
  </ul>

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
              
              <td><a class="nav-link" href="">01/20/2019</td>
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
