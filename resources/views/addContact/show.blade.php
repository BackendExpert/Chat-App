@auth

@extends('header')

<style>
    .one-contact{
        padding: 50px;
    }
</style>


    <div class="one-contact">
        <div class="container">
            <form action="{{ url('newChat') }}" method="post">
                @csrf

                {{-- <p>{{ $one_contact->name }}</p> --}}


                <input type="submit" value="ssssssss">
            </form>
        </div>
    </div>

@include('layouts.footer')

@else

<script>window.location = "/";</script>

@endauth