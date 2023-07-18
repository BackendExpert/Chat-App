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
            
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Errors : </strong> You got Following Errors while validation this form<br>
                            <b>{{ $error }}</b>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endforeach
                </ul>
            @endif

                <form action="{{ url('newChat') }}" method="post">
                    @csrf

                    {{-- <p>{{ $one_contact->name }}</p> --}}

                    <label for="contacter">Contact Name : </label>
                    <input type="hidden" name="owner" value="{{ Auth::user()->name }}">
                      <input type="text" class="form-control" value="{{ $one_contact->name }}" disabled>
                      <input type="hidden" name="contact_name">
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