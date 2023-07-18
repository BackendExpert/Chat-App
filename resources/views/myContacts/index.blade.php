@extends('layouts.dash')

<style>
    .one-contact{
        padding: 20px 30px;
        background: rgb(241, 241, 241);
        border: 1px solid rgb(214, 214, 214);
        border-radius: 5px;
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
                    <div class="col-lg-8">
                        <h3>{{ $contact->contact_name }}</h3>
                    </div>
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-2">
                        
                    </div>
                </div>
                <br>
            @endforeach
        </div>
    </div>

@endsection

