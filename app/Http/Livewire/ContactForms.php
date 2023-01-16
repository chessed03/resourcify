<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use App\Models\ContactForm;
use App\Models\Type;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;

class ContactForms extends Component
{

    use WithFileUploads;

    public $selected_id, $keyWord, $names, $surnames, $contact_number, $email_address, $company, $looking_for, $to_start, $budget, $files, $description_project, $message;

    public function render()
    {
        $types = Type::where('status', 1)->get();

        return view('livewire.contact-forms.contact-forms', [
            'types' => $types
        ]);
    }

    private function resetInput()
    {

        $this->names               = null;
        $this->surnames            = null;
        $this->contact_number      = null;
        $this->email_address       = null;
        $this->company             = null;
        $this->looking_for         = null;
        $this->to_start            = null;
        $this->budget              = null;
        $this->files               = null;
        $this->description_project = null;
        $this->message             = null;

    }

    public function store()
    {
        $this->validate([
            'names'         => 'required',
            'surnames'      => 'required',
            'email_address' => 'required',
            'files.*'       => 'file|mimes:zip,rar,7zip|max:1024',
            'message'       => 'required'
        ]);

        $uploadFile = $this->files->store('public/files');

        $data = ContactForm::create([
            'names'               => $this->names,
            'surnames'            => $this->surnames,
            'contact_number'      => $this->contact_number,
            'email_address'       => $this->email_address,
            'company'             => $this->company,
            'looking_for'         => $this->looking_for,
            'to_start'            => $this->to_start,
            'budget'              => $this->budget,
            'files'               => $uploadFile,
            'description_project' => $this->description_project,
            'message'             => $this->message,
            'created_by'          => 'root'
        ]);

        $contentMail = $data;

        Mail::to( ['chessed03@gmail.com'] )->send( new ContactMail( $contentMail ) );

        $this->resetInput();
        $this->hydrate();
    }
}
