@auth

@extends('header')

<style>
    .one-contact{
        padding: 50px;
    }
</style>


    <div class="one-contact">
        <div class="container">
            <form action="{{ url('addContact') }}" method="post">
                @csrf

                <input type="submit" value="ssssssss">
            </form>
        </div>
    </div>

@include('layouts.footer')

@else

<script>window.location = "/";</script>

@endauth