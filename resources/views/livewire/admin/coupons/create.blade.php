<div>

    <div class="modal-body">

        <div class="mb-3 input-container">
            <label class="text-dark">Coupon Code</label>
            <input type="text" wire:model="code" class="form-control text-dark">
            @error('code')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="text-dark">Coupon Discount $ </label>
            <input type="number" class="form-control text-dark" name="discount" wire:model="discount">

            @error('discount')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label text-dark">Coupon Valid From</label>
            <input type="date" class="form-control"  name="valid_from" wire:model="valid_from">
            @error('valid_from')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label text-dark">Coupon Valid Until</label>
            <input type="date" class="form-control" name="valid_until" wire:model="valid_until">
            @error('valid_until')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="button" wire:click="create" class="btn btn-primary">Save </button>
        </div>

    </div>
</div>
