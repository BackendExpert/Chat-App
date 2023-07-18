@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <div class="container">
            <h3>My Contact</h3>
            <hr>
            <br>
            @foreach ($myContact as $contact)
                
            @endforeach
        </div>
    </div>

@endsection

