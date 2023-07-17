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
                            if()

                        @endphp
                        <a href=""><button class="btn btn-success">Add to Contact</button></a>
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