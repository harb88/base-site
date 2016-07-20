@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Personal Details</h4>
                    </div>
                    <div class="panel-body">
                        <form action="{{url('/user/settings/edit-personal-details')}}" method="POST" class="form-horizontal">
                            {!! csrf_field() !!}

                            <!--Name Panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5>Name</h5>
                                </div>
                                <div class="panel-body">

                                    <!--Title select-->
                                    <div class="form-group{{ $errors->has('Title') ? ' has-error' : '' }}">
                                        <label for="Title" class="col-md-4 control-label">Title</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="Title" id="Title" placeholder="Title" value="{{$entity['Title']}}">
                                        </div>
                                    </div>

                                    <!--FirstNames input-->
                                    <div class="form-group{{ $errors->has('FirstNames') ? ' has-error' : '' }}">
                                        <label for="FirstNames" class="col-md-4 control-label">First Names</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="FirstNames" id="FirstNames" placeholder="First Names" value="{{$entity['FirstNames']}}">
                                        </div>
                                    </div>

                                    <!--Surname input-->
                                    <div class="form-group{{ $errors->has('Surname') ? ' has-error' : '' }}">
                                        <label for="Surname" class="col-md-4 control-label">Surname</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="Surname" id="Surname" placeholder="Surname" value="{{$entity['Surname']}}">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--Contact Panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5>Contact</h5>
                                </div>
                                <div class="panel-body">

                                    <!--PhoneBusiness input-->
                                    <div class="form-group{{ $errors->has('PhoneBusiness') ? ' has-error' : '' }}">
                                        <label for="PhoneBusiness" class="col-md-4 control-label">Business Phone</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="PhoneBusiness" id="PhoneBusiness" placeholder="Business Phone" value="{{$entity['PhoneBusiness']}}">
                                        </div>
                                    </div>

                                    <!--PhonePrivate input-->
                                    <div class="form-group{{ $errors->has('PhonePrivate') ? ' has-error' : '' }}">
                                        <label for="PhonePrivate" class="col-md-4 control-label">Private Phone</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="PhonePrivate" id="PhonePrivate" placeholder="Private Phone" value="{{$entity['PhonePrivate']}}">
                                        </div>
                                    </div>

                                    <!--PhoneMobile input-->
                                    <div class="form-group{{ $errors->has('PhoneMobile') ? ' has-error' : '' }}">
                                        <label for="PhoneMobile" class="col-md-4 control-label">Mobile Phone</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="PhoneMobile" id="PhoneMobile" placeholder="Mobile Phone" value="{{$entity['PhoneMobile']}}">
                                        </div>
                                    </div>

                                    <!--Fax input-->
                                    <div class="form-group{{ $errors->has('Fax') ? ' has-error' : '' }}">
                                        <label for="Fax" class="col-md-4 control-label">Fax</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="Fax" id="Fax" placeholder="Fax" value="{{$entity['Fax']}}">
                                        </div>
                                    </div>

                                    <!--EmailAddress input-->
                                    <div class="form-group{{ $errors->has('EmailAddress') ? ' has-error' : '' }}">
                                        <label for="EmailAddress" class="col-md-4 control-label">Email Address</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="EmailAddress" id="EmailAddress" placeholder="Email Address" value="{{$entity['EmailAddress']}}">
                                        </div>
                                    </div>

                                    <!--WebSite input-->
                                    <div class="form-group{{ $errors->has('WebSite') ? ' has-error' : '' }}">
                                        <label for="WebSite" class="col-md-4 control-label">Website</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="WebSite" id="WebSite" placeholder="Website" value="{{$entity['WebSite']}}">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--Address Panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5>Address</h5>
                                </div>
                                <div class="panel-body">

                                    <!--AddressMailingStreetName1 input-->
                                    <div class="form-group{{ $errors->has('AddressMailingStreetName1') ? ' has-error' : '' }}">
                                        <label for="AddressMailingStreetName1" class="col-md-4 control-label">Address Line 1</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="AddressMailingStreetName1" id="AddressMailingStreetName1" placeholder="Address Line 1" value="{{$entity['AddressMailingStreetName1']}}">
                                        </div>
                                    </div>

                                    <!--AddressMailingStreetName2 input-->
                                    <div class="form-group{{ $errors->has('AddressMailingStreetName2') ? ' has-error' : '' }}">
                                        <label for="AddressMailingStreetName2" class="col-md-4 control-label">Address Line 2</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="AddressMailingStreetName2" id="AddressMailingStreetName2" placeholder="Address Line 2" value="{{$entity['AddressMailingStreetName2']}}">
                                        </div>
                                    </div>

                                    <!--AddressMailingSuburb input-->
                                    <div class="form-group{{ $errors->has('AddressMailingSuburb') ? ' has-error' : '' }}">
                                        <label for="AddressMailingSuburb" class="col-md-4 control-label">Suburb</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="AddressMailingSuburb" id="AddressMailingSuburb" placeholder="Suburb" value="{{$entity['AddressMailingSuburb']}}">
                                        </div>
                                    </div>

                                    <!--AddressMailingPostCode input-->
                                    <div class="form-group{{ $errors->has('AddressMailingPostCode') ? ' has-error' : '' }}">
                                        <label for="AddressMailingPostCode" class="col-md-4 control-label">Postcode</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="AddressMailingPostCode" id="AddressMailingPostCode" placeholder="Postcode" value="{{$entity['AddressMailingPostCode']}}">
                                        </div>
                                    </div>

                                    <!--AddressMailingPostCode input-->
                                    <div class="form-group{{ $errors->has('AddressMailingState') ? ' has-error' : '' }}">
                                        <label for="AddressMailingState" class="col-md-4 control-label">State</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="AddressMailingState" id="AddressMailingState" placeholder="State" value="{{$entity['AddressMailingState']}}">
                                        </div>
                                    </div>

                                    <!--AddressMailingPostCode input-->
                                    <div class="form-group{{ $errors->has('AddressMailingCountry') ? ' has-error' : '' }}">
                                        <label for="AddressMailingCountry" class="col-md-4 control-label">Country</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="AddressMaiAddressMailingCountrylingState" id="AddressMailingCountry" placeholder="Country" value="{{$entity['AddressMailingCountry']}}">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--Save and Cancel Buttons-->
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <a href="{{url('/user/settings')}}" class="btn btn-default">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
