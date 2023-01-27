<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap ";

    public $name;
    public $image;
    public $gender;
    public $email;
    public $address;
    public $contact;

    public $view_id;
    public $delete_id;
    // validation
    public function openViewModal($id)
    {


        $this->dispatchBrowserEvent('openViewModal');
        $contact = Contact::find($id);
        $this->name = $contact->name;
        $this->image = $contact->image;
        $this->gender = $contact->gender;
        $this->address = $contact->address;
        $this->email = $contact->email;
        $this->contact = $contact->contact;
    }

    public function openDeleteModal($id)
    {
        $this->dispatchBrowserEvent('openDeleteModal');
        $this->delete_id = $id;
    }

    // when the delete button is clickd on on modal pop up
    public function delete()
    {
        // path to the image in the directory
        $image = Contact::where('id', $this->delete_id)
            ->get('image')
            ->first();

        $old_image = 'storage/photos/' . $image->image;

        // if an image exists in the photo directory then delete it


        if (File::exists($old_image)) {
            File::delete($old_image);

            $contact = Contact::find($this->delete_id);
            $contact->delete();
            $this->dispatchBrowserEvent('closeDeleteModal');
        } else {

            $contact = Contact::find($this->delete_id);
            $contact->delete();
            $this->dispatchBrowserEvent('closeDeleteModal');
        }
    }
    public function closeDeleteModal()
    {
        $this->dispatchBrowserEvent('closeDeleteModal');
    }

    public function render()
    {
        $contacts = Contact::orderBy('id', 'desc')
            ->paginate(3);
        return view('livewire.contact.index', compact('contacts'));
    }
}
