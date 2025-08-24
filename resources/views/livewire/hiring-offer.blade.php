<div>
    {{-- menu --}}
    <div @class(['row'])>
        <div @class(['col-md-12', 'd-flex', 'justify-content-between', 'mb-5'])>

            {{-- create button --}}
            <div>
                <button wire:click="openCreateModal" @class(['btn btn-primary', 'text-center'])>Create Offer</button>
            </div>

            {{-- search/filter --}}
            <div>
                <input type="search" @class(['form-control', 'p-2']) style="width: 300px">
                <button wire:click="filterDate" @class(['btn', 'text-center', 'border', 'my-1']) style="width: 200px">
                    Filter by Date Range
                </button>
            </div>

            {{-- status --}}
            <div>
                <select wire:model="filterStatus" @class(['form-control', 'p-2', 'text-center']) style="width: 150px">
                    <option selected>All Status</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            {{-- job title --}}
            <div>
                <select wire:model="filterJob" @class(['form-control', 'p-2', 'text-center']) style="width: 150px">
                    <option selected>Job Title</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

        </div>
    </div>

    {{-- table section --}}
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
                @foreach ($hirings as $hiring)
                    <tr>
                        <td>{{ $hiring->candidate_name }}</td>
                        <td>{{ $hiring->job_title }}</td>
                        <td>{{ $hiring->offer_date }}</td>
                        <td>{{ $hiring->expiration_date }}</td>
                        <td>{{ $hiring->offer_amount }}</td>
                        <td>{{ $hiring->status }}</td>
                        <td>...</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            {{ $hirings->links() }}
        </div>
    </div>

    {{-- modal include --}}
    @include('livewire.includes.hiringCreate')
</div>
