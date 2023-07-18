@auth

@extends('header')

<style>
    .one-contact{
        padding: 50px;
    }
</style>


    <div class="one-contact">
        <div class="container">

            <a href="{{ url('newChat') }}"><button class="btn btn-primary">Back</button></a>
            <br><br>

            @if (Auth::user()->name == $one_contact->name)
            <script>window.location = "/newChat";</script>
            @else
            
                <form action="{{ url('newChat/'.$one_contact->id) }}" method="post">
                    @csrf

                    {{-- <p>{{ $one_contact->name }}</p> --}}

                    <label for="contacter">Contact Name : </label>
                    <input type="hidden" name="owner" value="{{ Auth::user()->name }}">
                      <input type="text" name="contact_name" id="" class="form-control" value="{{ $one_contact->name }}" disabled>
                    <br>
                    <label for="note">Note :</label>
                    <input type="text" name="short_note" id="" class="form-control">
                    <br>
                    <input type="submit" value="Add To Contact" class="btn btn-success">
                </form>

            @endif
        </div>
    </div>

@include('layouts.footer')

@else

<script>window.location = "/";</script>

@endauth