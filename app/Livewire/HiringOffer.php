<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Offer;
use Livewire\Component;

class HiringOffer extends Component
{

    use WithPagination;

    //Modal

    public $showCreateModal = false;

    //Offer
    public $candidate_name = '';
    public $job_title = '';
    public $offer_date = '';
    public $expiration_date = '';
    public $offer_amount = '';
    public $status = '';

    public function render()
    {
        $hirings = offer::latest()->paginate(5);
        return view('livewire.hiring-offer', compact('hirings'));
    }

    public function openCreateModal()
    {
        $this->showCreateModal = true;
    }
    public function closeCreateModal()
    {
        $this->showCreateModal = false;
    }

    public function createOffer()
    {
        $this->validate([
            'candidate_name' => 'required|string|max:225',
            'job_title' => 'required|string|max:225',
            'offer_date' => 'required|date',
            'expiration_date' => 'required|date',
            'offer_amount' => 'required',
            'status' => 'required',
        ]);

        offer::create([
            'candidate_name' => $this->candidate_name,
            'job_title' => $this->job_title,
            'offer_date' => $this->offer_date,
            'expiration_date' => $this->expiration_date,
            'offer_amount' => $this->offer_amount,
            'status' => $this->status
        ]);

        $this->reset();
        $this->showCreateModal = false;
        session()->flash('message', 'Offer created successfully!');

    }

}
