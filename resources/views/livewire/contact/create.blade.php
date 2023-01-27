<div>
    <style>
        .error {
            font-size: 12px;
            color: red;
            font-weight: bold;
        }
    </style>
    <div class="container py-5 my-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-9 p-5 bg-white shadow">
                <form wire:submit.prevent="save">
                    <div class="row">
                        {{-- first column --}}
                        <div class="col-md-6">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Username</label>
                                <input type="text" wire:model="name"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="username">
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
                            <div class="mb-3">
                                <div>

                                    @if ($image)
                                    <p>

                                        IMage Preview
                                    </p>

                                    <img src="{{ $image->temporaryUrl() }}"  class="shadow"style="width:100px"alt="">
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- first column --}}

                        {{-- secondx-column --}}
                        <div class="col-md-6 mb-3">


                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                <textarea class="form-control @error('address') is-invalid @enderror "
                                    wire:model="address"id="exampleFormControlTextarea1" rows="3"></textarea>
                                @error('email')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row mb-4">
                                <p>Select Gender</p>
                                <div class="col-md-4">

                                    <div class="form-check">
                                        <input class="form-check-input @error('gender') is-invalid @enderror"
                                            type="radio" value="male" wire:model="gender">
                                        <label class="form-check-label" for="male">
                                            Male
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input @error('gender') is-invalid @enderror"
                                            type="radio" value="female" wire:model="gender">
                                        <label class="form-check-label" for="female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                                @error('gender')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class=" mb-3">
                                <label class="form-check-label" for="female">
                                    Profile picture
                                </label> <br>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    wire:model="image">
                                @error('image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">
                                <span wire:loading.remove wire:target="save">Save</span>
                                <span wire:loading wire:target="save">Saving</span>
                            </button>
                            <button type="button" class="btn btn-danger btn-block">Cancel</button>
                        </div>
                        {{-- secoond-column --}}

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
