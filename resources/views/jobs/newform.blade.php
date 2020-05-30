@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">New Job</h1>
                        </div>
                        <form class="user" method="POST" action="{{url('/job/save')}}"">
                            {{ csrf_field() }}

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input required type="text" name="name" class="form-control"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block">
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
