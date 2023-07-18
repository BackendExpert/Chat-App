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
                    <div class="row">
                        <div class="col-lg-8">
                            <h3>{{ $contact->contact_name }}</h3>
                        </div>
                        <div class="col-lg-2">
                            <a href=""><button class="btn btn-success" style="width: 100%;"></button></a>
                        </div>
                        <div class="col-lg-2">
                            <form method="POST" action="{{ url('/myContacts' . '/' . $contact->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" style="width: 100%;" class="btn btn-danger btn-sm" title="Delete video" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-calendar-times" aria-hidden="true"></i> Delete</button>
                            </form>  
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
        </div>
    </div>

@endsection

