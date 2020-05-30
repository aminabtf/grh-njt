@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Employees list</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>job</th>
                  <th>unity</th>
                  <th>Phone</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($users as $user)
                  <tr>
                  <td>{{$user->first_name}} </td>
                  <td>{{$user->last_name}}</td>
                  <td>{{$user->job}}</td>
                  <td>{{$user->unity_name}}</td>
                  <td>{{$user->phone_number}}</td>
                  <td>test</td>
                  </tr>
                  @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    @endsection
