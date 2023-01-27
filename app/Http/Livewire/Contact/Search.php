<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class Search extends Component
{
    public $email;
    public $address;
    public $contact;


    public function render()
    {
        if($this->email )
        {

            $contact=Contact::where('email',$this->email)->first();
            if($contact)
            {

                $this->address=$contact->address;
                $this->contact=$contact->contact;
            }else{
                $this->address="";
                $this->contact="";

            }
            // dd($contact);
        }



        return view('livewire.contact.search');
    }
}
