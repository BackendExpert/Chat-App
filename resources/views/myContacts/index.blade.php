@extends('layouts.dash')

<style>
    .one-contact{
        padding: 20px 30px;
        background: rgb(241, 241, 241);
    }
</style>

@section('content')
    <div class="admin-card">
        <div class="container">
            <h3>My Contact</h3>
            <hr>
            <br>
            @foreach ($myContact as $contact)
                <div class="one-contact">
                    <h3>{{ $contact->contact_name }}</h3>
                </div>
                <br>
            @endforeach
        </div>
    </div>

@endsection

