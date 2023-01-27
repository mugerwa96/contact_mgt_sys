<!-- Modal -->
<div class="modal fade "wire:ignore.self id="viewModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModalLabel">View Contact </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row justify-content-center align-items-center">
                    <div class="mb-3">
                        @if ($image)
                            <img src="{{ asset('storage/photos/' . $image) }}" style="width:50px" alt="">
                        @else
                            <img src="{{ asset('avatar.png') }}" style="width:50px" alt="">
                        @endif
                        </td>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror"
                            placeholder="username">
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Contact</label>
                        <input type="text" class="form-control @error('contact') is-invalid @enderror"
                            placeholder="contact" wire:model="contact">
                        @error('contact')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                            wire:model="email" placeholder="name@example.com">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                </div>


                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <textarea class="form-control @error('address') is-invalid @enderror "
                        wire:model="address"id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row mb-4">
                    <p>Gender</p>
                    <div class="col-md-4">


                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                            wire:model="gender" placeholder="name@example.com">
                        </div>
                    </div>

                </div>



            </div>
            {{-- secoond-column --}}

        </div>
    </div>



</div>
</div>
