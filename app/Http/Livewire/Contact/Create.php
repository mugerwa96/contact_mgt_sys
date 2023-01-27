<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $gender;
    public $email;
    public $address;
    public $contact;
    // validation
public function rules()
{
    $this->validate([

        'name'=>'required|min:5|max:10|unique:contacts,name',
        'contact'=>'required|numeric|min:5|unique:contacts,contact',
        'gender'=>'required',
        'email'=>'required|email|unique:contacts,email',
        'address'=>'required|string',
        'image'=>'image|max:1024|nullable',

],[
    'name.unique'=>'Name already registered',
    'email.unique'=>'Email already registered'
]);

}
    // real time validation

    public function updated()
    {
        $this->rules();

    }
    public function save()
    {
        $this->rules();
        $contact=new Contact;
        $contact->name=$this->name;
        $contact->email=$this->email;
        $contact->contact=$this->contact;
        $contact->address=$this->address;
        $contact->gender=$this->gender;
        if($this->image)
        {
            $image_name=$this->image->getClientOriginalName();
             $this->image->storeAs('public/photos', $image_name);
            $contact->image=$image_name;
        }

        $contact->save();
        $this->reset();
    }
    public function render()
    {
        return view('livewire.contact.create');
    }
}
