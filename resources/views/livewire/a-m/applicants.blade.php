<div class="container-fluid p-5 shadow-sm rounded">
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Job Title</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Suffix</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Resume</th>
                    <th>Date Applied</th>
                </tr>
            </thead>
            <tbody>
                @forelse($applicants as $applicant)
                    <tr>
                        <td>{{ $applicant->id }}</td>
                        <td>{{ $applicant->job_title }}</td>
                        <td>{{ $applicant->applicant_last_name }}</td>
                        <td>{{ $applicant->applicant_first_name }}</td>
                        <td>{{ $applicant->applicant_middle_name }}</td>
                        <td>{{ $applicant->applicant_suffix_name }}</td>
                        <td>{{ $applicant->applicant_address }}</td>
                        <td>{{ $applicant->applicant_email }}</td>
                        <td>{{ $applicant->applicant_phone }}</td>
                        <td>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#resumeModal{{ $applicant->id }}">
        View Resume
    </button>

    <!-- Modal -->
    <div class="modal fade" id="resumeModal{{ $applicant->id }}" tabindex="-1" aria-labelledby="resumeModalLabel{{ $applicant->id }}" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="resumeModalLabel{{ $applicant->id }}">
              Resume - {{ $applicant->applicant_first_name }} {{ $applicant->applicant_last_name }}
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="height: 80vh;">
            <iframe src="http://project-a.local/api/resume/{{ $applicant->id }}" 
                    style="width:100%; height:100%;" frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </div>
</td>



                        <td>{{ $applicant->created_at->format('Y-m-d') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="11" class="text-center text-muted">No applicants found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
