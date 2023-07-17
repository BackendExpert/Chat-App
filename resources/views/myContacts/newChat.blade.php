@auth

@extends('header')

<style>
    .contact-content{
        padding: 40px 0;
    }
</style>

<div class="contact-content">
    <div class="container">
        @foreach ($new_contact as $contact)
            <div class="one-contact">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>{{ $contact->name }}</h3>
                    </div>
                    <div class="col-lg-6" style="text-align: right;">
                        @php
                            if($contact->name == Auth::user()->name){
                                echo "<h4>Me</h4>";
                            }
                            else{
                                @endphp
                                    <a href=""><button class="btn btn-success">Add to Contact</button></a>
                                @php
                            }
                        @endphp                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                                
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('layouts.footer')

@else

<script>window.location = "/";</script>

@endauth