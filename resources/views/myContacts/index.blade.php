@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <div class="container">
            <h3>My Contact</h3>
            <hr>
            <br>
            @foreach ($collection as $item)
                
            @endforeach
        </div>
    </div>

@endsection

