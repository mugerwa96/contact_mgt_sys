<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class EditContact extends Component
{
    use WithFileUploads;
    public $name;
    public $edit_image;
    public $gender;
    public $email;
    public $address;
    public $contact;
    public $edit_id;
public $new_image;
    public function mount($id)
    {
        $contact=Contact::find($id);
       $this->name=$contact->name;
       $this->address=$contact->address;
       $this->email=$contact->email;
       $this->contact=$contact->contact;
       $this->edit_image=$contact->image;
       $this->gender=$contact->gender;
       $this->edit_id=$id;
    }
    // validation

public function rules()
{
    $this->validate([


        'name'=>'required|min:5|max:10|unique:contacts,name,'.$this->edit_id,
        'contact'=>'required|numeric|min:5|unique:contacts,contact,'.$this->edit_id,
        'gender'=>'required',
        'email'=>'required|email|unique:contacts,email,'.$this->edit_id,
        'address'=>'required|string',
        'new_image'=>'image|max:1024|nullable',

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
    public function update()
    {
        $this->rules();

        $contact=Contact::find($this->edit_id);
        $contact->name=$this->name;
        $contact->email=$this->email;
        $contact->contact=$this->contact;
        $contact->address=$this->address;
        $contact->gender=$this->gender;
        $old_image='storage/photos/'.$this->edit_image;

        if($this->new_image)
        {
            if(File::exists($old_image))
            {
                File::delete($old_image);
            }


                $image_name=$this->new_image->getClientOriginalName();
                 $this->new_image->storeAs('public/photos', $image_name);
                $contact->image=$image_name;



        }

        $contact->update();
       return to_route('contact.index');
    }
    public function render()
    {
        return view('livewire.contact.edit-contact');
    }
}
