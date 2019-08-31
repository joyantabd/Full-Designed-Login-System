@extends('layouts.dashboard')


@section('title','')


@push('css')

@endpush


@section('content')

    <div class="content-wrapper">
        <h3>{{ Auth::user()->name }} <br> Welcome to Your Dashboard</h3>
    </div>

@endsection

@push('scripts')
@endpush
