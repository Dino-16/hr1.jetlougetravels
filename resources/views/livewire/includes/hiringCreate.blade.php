@if($showCreateModal)
<div class="modal fade show d-block" tabindex="-1" style="background: rgba(0,0,0,0.5);">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-secondary text-white">
                <h5 class="modal-title">Offer Details</h5>
                <button type="button" class="btn-close btn-close-white" wire:click="closeCreateModal"></button>
            </div>

            <div class="modal-body">
                <form wire:submit.prevent="createOffer">

                    {{-- Form Titles --}}
                    <div class="mb-5">
                        <h2>Job Offer</h2>
                    </div>

                    <x-alert-success />

                    <div class="row">
                        {{-- Candidate name --}}
                        <div class="col-md-6 mb-3">
                            <x-input-label for="candidate_name" :value="__('Candidate Name')" />
                            <x-text-input wire:model="candidate_name" type="text" id="candidate_name" required />
                        </div>

                        {{-- Job title --}}
                        <div class="col-md-6 mb-3">
                            <x-input-label for="job_title" :value="__('Job Title')" />
                            <x-text-input wire:model="job_title" type="text" id="job_title" required />
                        </div>

                        {{-- Offer date --}}
                        <div class="col-md-6 mb-3">
                            <x-input-label for="offer_date" :value="__('Offer Date')" />
                            <x-text-input wire:model="offer_date" type="date" id="offer_date" required />
                            <x-input-error field="offer_date" />
                        </div>

                        {{-- Expiration date --}}
                        <div class="col-md-6 mb-3">
                            <x-input-label for="expiration_date" :value="__('Expiration Date')" />
                            <x-text-input wire:model="expiration_date" type="date" id="expiration_date" required />
                            <x-input-error field="expiration_date" />
                        </div>

                        {{-- Offer amount --}}
                        <div class="col-md-12 mb-3">
                            <x-input-label for="offer_amount" :value="__('Offer Amount')" />
                            <x-text-input wire:model="offer_amount" type="text" id="offer_amount" required />
                            <x-input-error field="offer_amount" />
                        </div>

                        {{-- Status --}}
                        <div class="col-md-6">
                            <x-input-label for="status" :value="__('Status')" />
                            <x-text-input wire:model="status" id="status" type="text" required />
                            <x-input-error field="status" />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <x-button-primary type="submit">Post</x-button-primary>
                        <button type="button" class="btn btn-secondary" wire:click="closeCreateModal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
