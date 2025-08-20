<div>
    <form wire:submit.prevent="post">

        {{-- Form Titles --}}
        <div @class(['mb-5'])>
            <h2>Post Job</h2>
            <p>Basic details about the job.</p>
        </div>

        <x-alert-success />

        <div @class(['row'])>

            {{-- Job Title --}}
            <div @class(['col-md-6', 'mb-3'])>
                <x-input-label for="job-title" :value="__('Job Title')" />
                <x-text-input wire:model="jobTitle" type="text" id="job-title" required />
                <x-input-error field="jobTitle" />
            </div>

            {{-- Job Type --}}
            <div @class(['col-md-6', 'mb-3'])>
                <x-input-label for="job-type" :value="__('Job Type')" />
                <x-select-input wire:model="jobType" id="job-type" :options="['full-time' => 'Full Time', 'part-time' => 'Part Time', 'contract' => 'Contract']" required />
                <x-input-error field="jobType" />
            </div>

            {{-- Job Description --}}
            <div @class(['col-md-12', 'mb-3'])>
                <x-input-label for="job-description" :value="__('Job Description')" />
                <x-text-area wire:model="jobDescription" id="job-description" required />
                <x-input-error field="jobDescription" />
            </div>

            {{-- Job Arrangement--}}
            <div @class(['col-md-6', 'mb-3'])>
                <x-input-label for="job-arrangement" :value="__('Job Arrangement')" />
                <x-select-input wire:model="jobArrangement" id="job-arrangement" :options="['on-site' => 'On Site', 'remote' => 'Remote', 'hybrid' => 'Hybrid']" required />
                <x-input-error field="jobArrangement" />
            </div>

            {{-- Job Summary --}}
            <div @class(['col-md-6', 'mb-3'])>
                <x-input-label for="job-summary" :value="__('Job Summary')" />
                <x-text-input wire:model="jobSummary" type="text" id="job-summary" required />
                <x-input-error field="jobSummary" />
            </div>

            {{-- Job Responsibilities --}}
            <div @class(['col-md-6'])>
                <x-input-label for="job-responsibilities" :value="__('Job Responsibilities')" />
                <x-text-area wire:model="jobResponsibilities" id="job-responsibilities" required />
                <x-input-error field="jobResponsibilities" />
            </div>

            {{-- Job Qualifications --}}
            <div @class(['col-md-6', 'mb-3'])>
                <x-input-label for="job-qualifications" :value="__('Job Qualifications')" />
                <x-text-area wire:model="jobQualifications" id="job-qualifications" required />
                <x-input-error field="jobQualifications" />
            </div>

            <div @class(['text-end', 'mb-3'])>
                <x-button-primary>Post</x-button-primary>
            </div>

        </div>

    </form>
</div>
