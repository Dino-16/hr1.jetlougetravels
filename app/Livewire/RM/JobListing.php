<?php

namespace App\Livewire\RM;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\RM\JobInformation;

class JobListing extends Component
{   
    #[Validate('required|string|max:255')]
    public $jobTitle = '';

    #[Validate('required|string|max:100')]
    public $jobType = '';

    #[Validate('required|string')]
    public $jobDescription = '';

    #[Validate('required|string|max:100')]
    public $jobArrangement = '';

    #[Validate('required|string|max:255')]
    public $jobSummary = '';

    #[Validate('required|string')]
    public $jobResponsibilities = '';

    #[Validate('required|string')]
    public $jobQualifications = '';

    public function post()
    {
        $this->validate();

        JobInformation::create([
            'job_title' => $this->jobTitle,
            'job_type' => $this->jobType,
            'job_description' => $this->jobDescription,
            'job_arrangement' => $this->jobArrangement,
            'job_summary' => $this->jobSummary,
            'job_responsibilities' => $this->jobResponsibilities,
            'job_qualifications' => $this->jobQualifications,
        ]);

        session()->flash('success', 'Job posted successfully!');

        return redirect()->route('posting');
    }


    public function render()
    {
        return view('livewire.r-m.job-listing');
    }
}
