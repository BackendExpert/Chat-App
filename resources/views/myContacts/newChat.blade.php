@extends('header')

<style>
    .contact-content{
        padding: 40px 0;
    }
</style>

<div class="contact-content">
    <div class="container">
        @foreach ($collection as $item)
            
        @endforeach
    </div>
</div>

@include('layouts.footer')