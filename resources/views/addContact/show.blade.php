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

                <label for="contacter">Contact Name : </label>
                <input type="text" name="contact_name" id="" class="form-control" value="{{ $one_contact->name }}" disabled>
                <br>
                <label for="note">Note :</label>
                <input type="text" name="short_note" id="" class="form-control">
                <br>
                <input type="submit" value="Add To Contact">
            </form>
        </div>
    </div>

@include('layouts.footer')

@else

<script>window.location = "/";</script>

@endauth