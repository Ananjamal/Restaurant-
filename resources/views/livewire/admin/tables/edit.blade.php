<div>
    <div class="modal-body">
        <div class="mb-3 input-container">
            <label for="tables" class="text-dark">Number of person:</label>
            <select class="form-select text-dark" id="tables" wire:model="capacity">
                @if ($table_id)
                    <option value="{{ $table->id }}" selected>{{ $table->capacity }}</option>
                @endif
                <option value="">Select a number</option>
                @for ($i = 1; $i <= 10; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            @error('capacity')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="modal-footer">
            <button type="button" wire:click='refresh' class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" wire:click="UpdateTable" class="btn btn-primary">Save</button>
        </div>
    </div>
</div>
