<?php

namespace App\Livewire\RM;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\JobRequisition;

class JobRequisitions extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    // Approve requisition
    public function approve($id)
    {
        $req = JobRequisition::findOrFail($id);
        $req->status = 'Approved';
        $req->save();
    }

    // Reject requisition
    public function reject($id)
    {
        $req = JobRequisition::findOrFail($id);
        $req->status = 'Rejected';
        $req->save();
    }

    public function render()
    {
        $requisitions = JobRequisition::latest()->paginate(10);
        return view('livewire.r-m.job-requisitions', compact('requisitions'));
    }
}
