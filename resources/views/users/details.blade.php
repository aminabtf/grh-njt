@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class=" p-5 card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Employee   {{$user->last_name}}  {{$user->first_name}} </h1>
                        </div>

                        <hr>
                    </div>
                </div>
            </div>
            <h4>General informations</h4>
            <div class="p-4">
                <div class="row form-group ">
                    <div class="col-md-2">First Name </div>
                    <div class="col-md-4"> : {{$user->first_name}}</div>
                    <div class="col-md-2">Last Name :</div>
                    <div class="col-md-4"> : {{$user->last_name}}</div>
                </div>
                <div class="row form-group ">
                    <div class="col-md-2">CIN </div>
                    <div class="col-md-4"> : {{$user->cin}}</div>
                    <div class="col-md-2">Birthday :</div>
                    <div class="col-md-4"> : {{date('d F Y', strtotime($user->birthday))}}</div>
                </div>
                <div class="row form-group ">
                    <div class="col-md-2">Family Situation </div>
                    <div class="col-md-4"> : {{$user->family_situation}}</div>
                    <div class="col-md-2">Gender :</div>
                    <div class="col-md-4"> : {{$user->gender}}</div>
                </div>
                <div class="row form-group ">
                    <div class="col-md-2">Nationality</div>
                    <div class="col-md-4"> : {{$user->nationality}}</div>
                    <div class="col-md-2">Mobile</div>
                    <div class="col-md-4"> : {{$user->phone_number}}</div>
                </div>
                <div class="row form-group ">
                    <div class="col-md-2">Home phone</div>
                    <div class="col-md-4"> : {{$user->home_phone}}</div>
                    <div class="col-md-2">Job</div>
                    <div class="col-md-4"> : {{$user->job}}</div>
                </div>
                <div class="row form-group ">
                    <div class="col-md-2">Unity</div>
                    <div class="col-md-4"> : {{$user->unity_name}}</div>
                    <div class="col-md-2">Assignment date</div>
                    <div class="col-md-4"> : {{date('d F Y', strtotime($user->assignment_date))}}</div>
                </div>
                <div class="row form-group ">
                    <div class="col-md-2">Current Adress</div>
                    <div class="col-md-4"> : {{$user->current_adress}}</div>
                    <div class="col-md-2">permannt adress</div>
                    <div class="col-md-4"> : {{$user->permanent_adress}}</div>
                </div>
                <div class="row form-group ">
                    <div class="col-md-2">Country</div>
                    <div class="col-md-4"> : {{$user->country}}</div>
                    <div class="col-md-2">region</div>
                    <div class="col-md-4"> : {{$user->region}}</div>
                </div>
                <div class="row form-group ">
                    <div class="col-md-2">City</div>
                    <div class="col-md-4"> : {{$user->city}}</div>
                    <div class="col-md-2">Postal</div>
                    <div class="col-md-4"> : {{$user->postal_code}}</div>
                </div>
                <div class="row form-group ">
                    <div class="col-md-2">Email</div>
                    <div class="col-md-4"> : {{$user->email}}</div>
                    <div class="col-md-2">Work Email</div>
                    <div class="col-md-4"> : {{$user->work_email}}</div>
                </div>
                <div class="row form-group ">
                    <div class="col-md-2">work Phone</div>
                    <div class="col-md-4"> : {{$user->work_phone}}</div>
                    <div class="col-md-2">PAsseport Number</div>
                    <div class="col-md-4"> : {{$user->passeport_number}}</div>
                </div>
                <div class="row form-group ">
                    <div class="col-md-2">Passeport End date</div>
                    <div class="col-md-4"> : {{date('d F Y', strtotime($user->passeport_end_date))}}</div>
                </div>
                <hr>
                <h4>Emergency Contact</h4>
                <div class="row form-group ">
                    <div class="col-md-2">Full Name</div>
                    <div class="col-md-4"> : {{$user->emergency_contact_name}}</div>
                    <div class="col-md-2">Mobile</div>
                    <div class="col-md-4"> : {{$user->emergency_contact_mobile}}</div>
                </div>
                <div class="row form-group ">
                    <div class="col-md-2">fix</div>
                    <div class="col-md-4"> : {{$user->emergency_contact_fix}}</div>
                    <div class="col-md-2">Adress</div>
                    <div class="col-md-4"> : {{$user->emergency_contact_adress}}</div>
                </div>
                <div class="row form-group ">
                    <div class="col-md-2">relationship</div>
                    <div class="col-md-4"> : {{$user->emergency_contact_relationship}}</div>
                </div>


            </div>

        </div>
    </div>
    @endsection
