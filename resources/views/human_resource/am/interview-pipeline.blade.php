@extends('layouts.app')

@section('content')
<div @class(['container'])>

    {{-- title --}}
    <div @class(['mb-3'])>
        <h1>Interview Pipeline</h1>
    </div>

    {{-- tabs --}}
    <ul @class(['nav', 'nav-tabs']) id="myTab" role="tablist">

        {{-- Overall --}}
        <li @class(['nav-item']) role="presentation">
            <button @class(['nav-link', 'active']) id="overall-tab" data-bs-toggle="tab" data-bs-target="#overall" type="button" role="tab" aria-controls="overall" aria-selected="true">
                Overall
            </button>
        </li>

        {{-- Facility Request --}}
        <li @class(['nav-item']) role="presentation">
            <button @class(['nav-link']) id="facility-tab" data-bs-toggle="tab" data-bs-target="#facility" type="button" role="tab" aria-controls="facility" aria-selected="false">
                Facility Request
            </button>
        </li>

        {{-- Scheduling --}}
        <li @class(['nav-item']) role="presentation">
            <button @class(['nav-link']) id="scheduling-tab" data-bs-toggle="tab" data-bs-target="#scheduling" type="button" role="tab" aria-controls="scheduling" aria-selected="false">
                Scheduling
            </button>
        </li>

        {{-- Interviews --}}
        <li @class(['nav-item']) role="presentation">
            <button @class(['nav-link']) id="interview-tab" data-bs-toggle="tab" data-bs-target="#interview" type="button" role="tab" aria-controls="interview" aria-selected="false">
                Interviews
            </button>
        </li>

    </ul>

    {{-- tab content --}}
    <div @class(['tab-content', 'mt-3']) id="myTabContent">

        {{-- Overall --}}
        <div @class(['tab-pane', 'fade', 'show', 'active']) id="overall" role="tabpanel" aria-labelledby="overall-tab">
            <div @class(['mb-3', 'd-flex', 'justify-content-between'])>
                <input @class(['form-control', 'w-25']) type="search" placeholder="Search">
                <button @class(['btn', 'btn-primary'])>Overall</button>
            </div>
            <div @class(['table-responsive'])>
                <table @class(['table', 'table-bordered', 'table-striped'])>
                    <thead @class(['table-dark'])>
                        <tr>
                            <th>ID</th>
                            <th>Facility</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FR-001</td>
                            <td>Conference Room</td>
                            <td>2025-08-25</td>
                            <td>Pending</td>
                            <td>Note</td>
                        </tr>
                        <tr>
                            <td>FR-002</td>
                            <td>Training Hall</td>
                            <td>2025-08-26</td>
                            <td>Approved</td>
                            <td>Note</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Facility Request --}}
        <div @class(['tab-pane', 'fade']) id="facility" role="tabpanel" aria-labelledby="facility-tab">
            <div @class(['mb-5', 'd-flex', 'justify-content-between'])>
                <input @class(['form-control', 'w-25']) type="search" placeholder="Search">
                <button @class(['btn', 'btn-primary'])>Request Facility</button>
            </div>

            {{-- header --}}
            <div @class(['mb-5'])>
                <h4>Facility Request</h4>
            </div>

            {{-- conmtent --}}
            <div class="row">

                {{-- card --}}
                <div @class(['col-md-4', 'border', 'p-3'])>

                   <div>

                        {{-- header section --}}
                        <div @class(['row', 'p', 'mb-1'])>

                            {{-- img --}}
                            <div @class(['col-sm-3'])>
                                <img src="https://i.pinimg.com/736x/81/0c/74/810c7414ea6541dd35f9629bbd428874.jpg"
                                @class(['img-fluid', 'rounded-circle']) style="width: 60px; height: 60px;" alt="">
                            </div>

                            {{-- name, role --}}
                            <div @class(['col-sm-9'])>
                                <h6>Renzemark M. Olea</h6>
                                <p>sss</p>
                            </div>

                        </div>

                        {{--status --}}
                        <div @class(['d-flex','mb', 'justify content-start'])>
                            <p @class(['p-2', 'text-center', 'rounded-5', 'border'])
                            style="width: 100px">
                                Pending</p>
                        </div>

                        {{-- -button --}}
                        <div @class(['d-flex', 'justify-content-end', 'mb-1', 'gap-2'])>
                            <button @class(['btn', 'border'])>View Details</button>
                            <button @class(['btn btn-primary'])>Follow Up</button>
                        </div>

                   </div>

                </div>

            </div>

        </div>



        {{-- Scheduling --}}
        <div @class(['tab-pane', 'fade']) id="scheduling" role="tabpanel" aria-labelledby="scheduling-tab">
            <div @class(['mb-5', 'd-flex', 'justify-content-between'])>
                <input @class(['form-control', 'w-25']) type="search" placeholder="Search">
                <button @class(['btn', 'btn-primary'])>Add Schedule</button>
            </div>

            {{-- header --}}
            <div @class(['mb-5'])>
                <h4>Schedule</h4>
            </div>

            {{-- content --}}
            <div class="row">

                {{-- card --}}
                <div @class(['col-md-4', 'border', 'p-3'])>

                   <div>

                        {{-- header section --}}
                        <div @class(['row', 'p', 'mb-1'])>

                            {{-- img --}}
                            <div @class(['col-sm-3'])>
                                <img src="https://i.pinimg.com/736x/81/0c/74/810c7414ea6541dd35f9629bbd428874.jpg"
                                @class(['img-fluid', 'rounded-circle']) style="width: 60px; height: 60px;" alt="">
                            </div>

                            {{-- name, role --}}
                            <div @class(['col-sm-9'])>
                                <h6>Renzemark M. Olea</h6>
                                <p>sss</p>
                            </div>

                        </div>

                        {{--status --}}
                        <div @class(['d-flex','mb', 'justify content-start'])>
                            <p @class(['p-2', 'text-center', 'rounded-5', 'border'])
                            style="width: 100px">
                                Pending</p>
                        </div>

                        {{-- -button --}}
                        <div @class(['d-flex', 'justify-content-end', 'mb-1', 'gap-2'])>
                            <button @class(['btn', 'border'])>View Details</button>
                            <button @class(['btn btn-primary'])>Follow Up</button>
                        </div>

                   </div>

                </div>

            </div>

        </div>

        {{-- Interviews --}}
        <div @class(['tab-pane', 'fade']) id="interview" role="tabpanel" aria-labelledby="interview-tab">
            <div @class(['mb-5', 'd-flex', 'justify-content-between'])>
                <input @class(['form-control', 'w-25']) type="search" placeholder="Search">
                <button @class(['btn', 'btn-primary'])>Add Interview</button>
            </div>

            {{-- header --}}
            <div @class(['mb-5'])>
                <h4>Interview</h4>
            </div>

            {{-- conmtent --}}
            <div class="row">

                {{-- card --}}
                <div @class(['col-md-4', 'border', 'p-3'])>

                   <div>

                        {{-- header section --}}
                        <div @class(['row', 'p', 'mb-1'])>

                            {{-- img --}}
                            <div @class(['col-sm-3'])>
                                <img src="https://i.pinimg.com/736x/81/0c/74/810c7414ea6541dd35f9629bbd428874.jpg"
                                @class(['img-fluid', 'rounded-circle']) style="width: 60px; height: 60px;" alt="">
                            </div>

                            {{-- name, role --}}
                            <div @class(['col-sm-9'])>
                                <h6>Renzemark M. Olea</h6>
                                <p>sss</p>
                            </div>

                        </div>

                        {{--status --}}
                        <div @class(['d-flex','mb', 'justify content-start'])>
                            <p @class(['p-2', 'text-center', 'rounded-5', 'border'])
                            style="width: 100px">
                                Pending</p>
                        </div>

                        {{-- -button --}}
                        <div @class(['d-flex', 'justify-content-end', 'mb-1', 'gap-2'])>
                            <button @class(['btn', 'border'])>View Details</button>
                            <button @class(['btn btn-primary'])>Follow Up</button>
                        </div>

                   </div>

                </div>

            </div>

        </div>

</div>
@endsection
