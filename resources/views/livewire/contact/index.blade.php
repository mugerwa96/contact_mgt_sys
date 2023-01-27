
<div>

<div class="container py-5">
    <div class="row justify-content-center align-item-center ">
        <div class="col-md-10 p-5">
            <table class="table shadow bg-white  rounded">
                <thead>
                  <tr>
                    <th scope="col">Profile picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($contacts as $contact)

                    <tr>

                      <td>
                        @if ($contact->image)

                        <img src="{{ asset('storage/photos/'.$contact->image) }}" style="width:50px" alt="">
                        @else
                            <img src="{{ asset('avatar.png') }}" style="width:50px" alt="">
                        @endif
                      </td>
                      <td>{{ $contact->name }}</td>
                      <td>{{ $contact->email }}</td>
                      <td>{{ $contact->contact }}</td>
                      <td>{{ $contact->gender }}</td>
                      <td>

                        <div class="btn-group">

                            <button  wire:click="openViewModal({{ $contact->id }})" class="btn btn-sm btn-warning">
                                <span wire:loading.remove wire:target="openViewModal({{ $contact->id }})" >View</span>
                                <span wire:loading wire:target="openViewModal({{ $contact->id }})" >Opening</span>
                            </button>
                            <a href="{{ route('contact.edit',$contact->id) }}"class="btn btn-sm btn-success">Edit</a>
                            <button  wire:click="openDeleteModal({{ $contact->id}})"class="btn btn-sm btn-danger">
                                <span wire:loading.remove wire:target="openDeleteModal({{ $contact->id}})">Delete</span>
                                <span wire:loading wire:target="openDeleteModal({{ $contact->id}})"  >Deleting</span>
                            </button>
                        </div>
                      </td>

                    </tr>
                    {{-- modals --}}
                        @include('Contact.inc.openViewModal')
                        @include('Contact.inc.openDeleteModal')
                    @endforeach


                </tbody>
            </table>
            {{ $contacts->links() }}
        </div>
    </div>
</div>


</div>
