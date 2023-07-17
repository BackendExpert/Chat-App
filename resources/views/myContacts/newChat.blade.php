@auth

@extends('header')

<style>
    .contact-content{
        padding: 40px 0;
    }
    .one-contact{
        padding: 20px 0;
        border: 1px solid rgb(126, 126, 126);
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
                            @php
                                if($contact->role == 1){
                                    echo "Admin";
                                }
                                elseif($contact->role == 2){
                                    echo "Staff Member";
                                }
                                elseif($contact->role == 3){
                                    echo "Client";
                                }
                            @endphp    
                        </p>
                    </div>
                </div>
            </div><br>
        @endforeach
    </div>
</div>

@include('layouts.footer')

@else

<script>window.location = "/";</script>

@endauth