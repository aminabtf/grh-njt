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
                            <h1 class="h4 text-gray-900 mb-4">New Employee</h1>
                        </div>
                        <form class="user" method="POST" action="{{url('/user/save')}}"">
                            {{ csrf_field() }}
                            <h4>General informations : </h2>
                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <input required type="text" name="first_name" class="form-control"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-3">
                                        <input required type="text" name="last_name" class="form-control"
                                            placeholder="Last Name">
                                    </div>
                                    <div class="col-sm-3">
                                        <input required type="text" name="cin" class="form-control" placeholder="CIN">
                                    </div>
                                    <div class="col-sm-3">
                                        <input required id="datepicker" name="birthday" placeholder="Birthday date" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <select class="form-control" name="gender" required>
                                            <option>M</option>
                                            <option>F</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2" id="nationalities">
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="family_situation" required>
                                            <option>Married</option>
                                            <option>Divorced</option>
                                            <option>Single</option>
                                        </select>
                                    </div>
                                        <div class="col-sm-3">
                                            <input required type="text" class="form-control" name="phone_number"
                                                placeholder="Mobile Phone">
                                        </div>
                                        <div class="col-sm-3">
                                            <input required type="text" class="form-control" name="home_phone"
                                                placeholder="Home Phone">
                                        </div>



                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <select class="form-control" name="unity_id" required>
                                            <option value="" disabled selected>Select unity</option>
                                            @foreach ($unities as $unity)
                                            <option value="{{$unity->id}}">{{$unity->unity_name}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="job" required>
                                            <option value="" disabled selected>Select job</option>
                                            <option value="enginerr" >enginerr</option>
                                            <option value="director" >director</option>
                                            <option value="technical" >technical</option>
                                            <option value="secretary" >secretary</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input required id="datepicker2" name="assignment_date" placeholder="Assignement date" />
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="is_chief" required>
                                            <option value="" disabled selected>is chief</option>
                                            <option value="1" >yes</option>
                                            <option value="0" >no</option>


                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <textarea required class="form-control" name="current_adress" rows="2"
                                            placeholder="Current Adress"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea required class="form-control" name="permanent_adress" rows="2"
                                            placeholder="Permanent Adress"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <select required name="country" class="countries order-alpha form-control presel-MA"
                                            id="countryId">
                                            <option value="">Select Country</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select required name="region" class="states order-alpha form-control" id="stateId">
                                            <option value="">Select State</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select required name="city" class="cities order-alpha form-control" id="cityId">
                                            <option value="">Select City</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input required type="text" name="postal_code" class="form-control"
                                            placeholder="Postal Code">
                                    </div>
                                </div>
                                <hr class="py-3">

                                <h4>Extra informations : </h2>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <input required type="email" name="email" class="form-control"
                                                placeholder="Personal Email">
                                        </div>
                                        <div class="col-sm-4">
                                            <input required type="email" class="form-control" name="work_email" placeholder="work Email">
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="input-group">
                                                <div class="input-group addon">
                                                <input required type="password" name="password" class="form-control pwd"
                                                    value="password">
                                                <span class="input required-group-btn input-group-addon" id="basic-addon1">
                                                    <button class="btn btn-default reveal" type="button"><i
                                                            class="fas fa-eye"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 ">
                                            <input required type="text" class="form-control" name="work_phone" placeholder="work phone">
                                        </div>
                                        <div class="col-sm-4">
                                            <input required type="text" class="form-control" name="passeport_number"
                                                placeholder="Passeport Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input required id="datepicker1" name="passeport_end_date" placeholder="passeport end date" />
                                        </div>
                                    </div>

                                    <hr class="py-3">

                                    <h4>Emergency contact : </h2>
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <input required type="text" class="form-control" name="emergency_contact_name"
                                                    placeholder="Full Name">
                                            </div>
                                            <div class="col-sm-4 ">
                                                <input required type="text" class="form-control" name="emergency_contact_mobile"
                                                    placeholder="Mobile phone">
                                            </div>
                                            <div class="col-sm-4 ">
                                                <input required type="text" class="form-control" name="emergency_contact_fix"
                                                    placeholder="fix phone">
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-8">
                                                <textarea required class="form-control" name="emergency_contact_adress" rows="2" placeholder="Adress"></textarea>
                                            </div>
                                            <div class="col-sm-4 ">
                                                <input required type="text" class="form-control" name="emergency_contact_relationship"
                                                    placeholder="relationship">
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
