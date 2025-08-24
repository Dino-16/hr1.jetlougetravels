@extends('layouts.app')

@section('content')
    <div @class(['container-fluid', 'bg-white','shadow','rounded'])>

        {{-- Job Listing --}}
        @livewire('r-m.job-listing')

    </div>
@endsection