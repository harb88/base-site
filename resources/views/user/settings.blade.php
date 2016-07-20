@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel-body">
                    <div class="panel panel-default clearfix">
                        <div class="panel-heading">
                            <h4>Account Details</h4>
                        </div>
                        <div class="panel-body">
                            <table style="border:none;">
                                <tbody>
                                <tr>
                                    <td style="padding:5px;">
                                        <span class="text-muted"><small>Name</small></span><br/>
                                        {{ $user->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:5px;">
                                        <span class="text-muted"><small>Email</small></span><br/>
                                        {{ $user->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:5px;">
                                        <span class="text-muted"><small>Password</small></span>
                                        <span class="text-muted pull-right"><small><a href="{{url('/password/reset')}}">(Reset Password)</a></small></span>
                                        <br/>
                                        **********
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:5px;">
                                        <span class="text-muted"><small>Entity ID</small></span><br/>
                                        {{ $user->Entity->entity_id }}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ url('/user/settings/edit-personal-details') }}" class="btn btn-primary pull-right">Edit</a>
                            <h4>Personal Details</h4>
                        </div>
                        <div class="panel-body">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5>Name</h5>
                                </div>
                                <div class="panel-body">
                                    <table style="border:none;">
                                        <tbody>
                                            <tr>
                                                <td style="padding:5px;">
                                                    <span class="text-muted"><small>Title</small></span><br/>
                                                    {{ ($entity['Title'] == "") ? "None" : $entity['Title']}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">
                                                    <span class="text-muted"><small>First Names</small></span><br/>
                                                    {{ ($entity['FirstNames'] == "") ? "None" : $entity['FirstNames'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">
                                                    <span class="text-muted"><small>Surname</small></span><br/>
                                                    {{ ($entity['Surname'] == "") ? "None" : $entity['Surname'] }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5>Contact</h5>
                                </div>
                                <div class="panel-body">
                                    <table style="border:none;">
                                        <tbody>
                                            <tr>
                                                <td style="padding:5px;">
                                                    <span class="text-muted"><small>Business Phone</small></span><br/>
                                                    {{ ($entity['PhoneBusiness'] == "") ? "None" : $entity['PhoneBusiness'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">
                                                    <span class="text-muted"><small>Private Phone</small></span><br/>
                                                    {{ ($entity['PhonePrivate'] == "") ? "None" : $entity['PhonePrivate'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">
                                                    <span class="text-muted"><small>Mobile Phone</small></span><br/>
                                                    {{ ($entity['PhoneMobile'] == "") ? "None" : $entity['PhoneMobile'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">
                                                    <span class="text-muted"><small>Fax</small></span><br/>
                                                    {{ ($entity['Fax'] == "") ? "None" : $entity['Fax'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">
                                                    <span class="text-muted"><small>Email</small></span><br/>
                                                    {{ ($entity['EmailAddress'] == "") ? "None" : $entity['EmailAddress'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">
                                                    <span class="text-muted"><small>Website</small></span><br/>
                                                    {{ ($entity['WebSite'] == "") ? "None" : $entity['WebSite'] }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5>Address</h5>
                                </div>
                                <div class="panel-body">
                                    <table style="border:none;">
                                        <tbody>
                                            <tr>
                                                <td style="padding:5px;">
                                                    <span class="text-muted"><small>Address Line 1</small></span><br/>
                                                    {{ ($entity['AddressMailingStreetName1'] == "") ? "None" : $entity['AddressMailingStreetName1'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">
                                                    <span class="text-muted"><small>Address Line 2</small></span><br/>
                                                    {{ ($entity['AddressMailingStreetName2'] == "") ? "None" : $entity['AddressMailingStreetName2'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">
                                                    <span class="text-muted"><small>Suburb</small></span><br/>
                                                    {{ ($entity['AddressMailingSuburb'] == "") ? "None" : $entity['AddressMailingSuburb'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">
                                                    <span class="text-muted"><small>Postcode</small></span><br/>
                                                    {{ ($entity['AddressMailingPostCode'] == "") ? "None" : $entity['AddressMailingPostCode'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">
                                                    <span class="text-muted"><small>State</small></span><br/>
                                                    {{ ($entity['AddressMailingState'] == "") ? "None" : $entity['AddressMailingState'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px;">
                                                    <span class="text-muted"><small>Country</small></span><br/>
                                                    {{ ($entity['AddressMailingCountry'] == "") ? "Australia" : $entity['AddressMailingCountry'] }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection