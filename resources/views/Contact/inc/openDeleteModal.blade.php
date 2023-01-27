<!-- Modal -->
<style>
    .error {
        font-size: 12px
    }
</style>
<div class="modal fade" wire:ignore.self id="openDeleteModal" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="openDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mx-auto fw-bold" id="openDeleteModalLabel">Delete Contact</h5>

            </div>
            <div class="modal-body text-center mx-auto">


                <p class="text-center">Are You Sure U Want to Delete? </p>

                <button type="button" class="btn btn-sm btn-danger" wire:click="closeDeleteModal">Cancel</button>
                <button type="button" wire:click='delete' class="btn btn-sm btn-success">Delete</button>


            </div>
        </div>
    </div>
</div>
