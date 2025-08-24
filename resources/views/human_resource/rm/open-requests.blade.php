@extends('layouts.app')

@section('page-title', 'Travel Job-Requisition')
@section('page-subtitle', 'Review and manage incoming job requisitions.')
@section('breadcrumbs', 'Open Requests')

@section('content')
<div @class(['container-fluid', 'bg-white','shadow','rounded'])>

    @livewire('r-m.job-requisitions')

</div>
@endsection
