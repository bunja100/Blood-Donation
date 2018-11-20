<?php
/**
 * Created by PhpStorm.
 * User: cayor
 * Date: 11/20/18
 * Time: 1:44 PM
 */ ?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 donors-list">
                <h2 class="pull-left">DONORS</h2></div>
            <div class="col-md-12 login-page">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Location</th>
                        <th class="text-center">Blood Type</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($donors as $donor)
                        <tr>
                            <td class="pull-left">{{$donor->first_name. ' '. $donor->last_name}}</td>
                            <td>{{$donor->phone}}</td>
                            <td>{{$donor->location}}</td>
                            <td>{{$donor->blood_type}}</td>
                            <td>{{$donor->email}}</td>
                            @if($donor->status == 1)
                                <td><a href="donate/edit/{{$donor->id}}">deactivate</a></td>
                            @else
                                <td><a href="donate/edit/{{$donor->id}}">activate</a></td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection

