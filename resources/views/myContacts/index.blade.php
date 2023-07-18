@extends('layouts.dash')

<style>
    .one-contact{
        padding: 20px 30px;
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
            @endforeach
        </div>
    </div>

@endsection

