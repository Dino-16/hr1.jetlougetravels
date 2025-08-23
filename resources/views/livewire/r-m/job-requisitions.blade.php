<div>
    <div @class(['table-responsive'])>
        <table @class(['table'])>
            <thead>
                <tr>
                    <th @class(['col'])>Requested By</th>
                    <th @class(['col'])>Department</th>
                    <th @class(['col'])>Job Type</th>
                    <th @class(['col'])>Description</th>
                    <th @class(['col'])>Open Position</th>
                    <th @class(['col'])>Requested Date</th>
                    <th @class(['col'])>Status</th>
                    <th @class(['col'])>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($requisitions as $requisition)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $req->requested_by }}</td>
                        <td>{{ $req->department }}</td>
                        <td>{{ $req->job_type }}</td>
                        <td>{{ Str::limit($req->description, 30) }}</td>
                        <td>{{ $req->open_positions }}</td>
                        <td>${{ number_format($req->salary, 2) }}</td>
                        <td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>