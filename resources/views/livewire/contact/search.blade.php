<div>
   {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
   <div class="container py-5">
    <div class="row justify-content-center align-items-center ">

        <div class="col-md-6 shadow bg-light p-4 rounded my-5   ">

        <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" wire:model="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
           
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Contact</label>
              <input type="text" wire:model="contact" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Address</label>
              <input type="text" wire:model="address" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>
    </div>
</div>
</div>
