@extends('layouts.app')

@section('content')

    <div @class(['container', 'bg-white', 'p-5'])>

        {{-- header --}}
        <div @class(['mb-5'])>
            <h1>Hiring Offer</h1>
        </div>

        {{-- menu --}}
        <div @class(['row'])>

            <div @class(['col-md-12', 'd-flex', 'justify-content-between', 'mb-5'])>

                {{-- create button --}}
                <div>
                    <button @class(['btn btn-primary', 'text-center'])>Create Offer</button>
                </div>

                {{-- search/filter --}}
                <div>
                    <input type="search" @class(['form-control', 'p-2']) style="width: 300px">
                    <button  @class(['btn', 'text-center', 'border', 'my-1  ']) style="width: 200px">Filter by Date Ranger</button>
                </div>

                {{-- status --}}
                <div>
                    <select @class(['form-control', 'p-2', 'text-center']) style="width: 150px">
                    <option selected>All Status</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                </div>

                {{-- job title --}}
                <div>
                    <select @class(['form-control', 'p-2', 'text-center']) style="width: 150px">
                    <option selected>All Status</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                </div>

            </div>

        </div>


        {{-- table section --}}
        <div>
                <div @class(['table-responsive'])>
                    <table @class(['table'])>
                        <thead @class(['table-dark'])>
                            <tr>
                                <th>Candidate Name</th>
                                <th>Job Title</th>
                                <th>Offer Date</th>
                                <th>Expiration Date</th>
                                <th>Offer Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Renzemark M. Olea</td>
                                <td>Ano</td>
                                <td>2025-08-28</td>
                                <td>2026-1-1</td>
                                <td>piso 1</td>
                                <td>sent</td>
                                <td>...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

@endsection
