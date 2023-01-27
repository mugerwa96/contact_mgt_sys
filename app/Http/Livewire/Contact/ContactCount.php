<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class ContactCount extends Component
{
    public  $count=0;
    public function render()
    {
        $this->count=Contact::count();
        return view('livewire.contact.contact-count');
    }
}
