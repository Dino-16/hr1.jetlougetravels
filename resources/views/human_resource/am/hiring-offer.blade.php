@extends('layouts.app')

@section('content')

    <div @class(['container', 'bg-white', 'p-5'])>

        {{-- header --}}
        <div @class(['mb-5'])>
            <h1>Hiring Offer</h1>
        </div>

        @livewire('hiring-offer')

    </div>

@endsection
