<?php

namespace App\Http\Livewire;

use App\Models\ContactForm;
use Livewire\Component;

class ContactForms extends Component
{
    public $selected_id, $keyWord, $names, $surnames, $contact_number, $email_address, $company, $message;

    public function render()
    {
        return view('livewire.contact-forms.contact-forms');
    }

    private function resetInput()
    {

        $this->names          = null;
        $this->surnames       = null;
        $this->contact_number = null;
        $this->email_address  = null;
        $this->company        = null;
        $this->message        = null;

    }

    public function store()
    {
        $this->validate([
            'names'         => 'required',
            'surnames'      => 'required',
            'email_address' => 'required',
            'message'       => 'required'
        ]);

        ContactForm::create([
            'names'          => $this->names,
            'surnames'       => $this->surnames,
            'contact_number' => $this->contact_number,
            'email_address'  => $this->email_address,
            'company'        => $this->company,
            'message'        => $this->message,
            'created_by'     => 'root'
        ]);

        $this->resetInput();
        $this->hydrate();
    }
}
