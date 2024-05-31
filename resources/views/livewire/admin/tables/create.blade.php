<div>
    <div class="modal-body">
        <div class="mb-3 input-container">
            <label for="capacity" class="text-dark">Number of Person:</label>
            <select class="form-select text-dark" id="capacity" wire:model="capacity">
                <option value="">Select a number</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            @error('capacity')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="button" wire:click="create" class="btn btn-primary">Save</button>
        </div>
    </div>
</div>
