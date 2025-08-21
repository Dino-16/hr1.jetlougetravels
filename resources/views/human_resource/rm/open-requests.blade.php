@extends('layouts.app')

@section('page-title', 'Travel Job-Requisition')
@section('page-subtitle', 'Review and manage incoming job requisitions.')

@section('content')
<div @class(['container-fluid','px-3','py-5','bg-white','shadow','rounded'])>

    @livewire('r-m.job-requisitions')

</div>
@endsection
