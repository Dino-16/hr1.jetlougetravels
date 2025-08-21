<div>
    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>Requested By</th>
                    <th>Department</th>
                    <th>Job Type</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($requisitions as $req)
                <tr>
                    <td>{{ $req->requested_by }}</td>
                    <td>{{ $req->department }}</td>
                    <td>{{ $req->job_type }}</td>
                    <td>{{ $req->status }}</td>
                    <td>

                        <!-- Approve/Reject Buttons -->
                        <button wire:click="approve({{ $req->id }})" class="btn btn-success btn-sm">
                            Approve
                        </button>
                        <button wire:click="reject({{ $req->id }})" class="btn btn-danger btn-sm">
                            Reject
                        </button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        {{ $requisitions->links() }}

        
    </div>
</div>