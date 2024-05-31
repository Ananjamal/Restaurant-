<div>

    <div class="modal-body">

        <div class="mb-3 input-container">
            <label class="text-dark">Chef Name</label>
            <input type="text" wire:model="name" class="form-control text-dark">
            @error('name')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>

        <div class="mb-3 input-container">
            <label for="Specialization" class="text-dark">Specialization</label>
            <select class="form-select text-dark" id="Specialization" wire:model="specialization">
                <option value="" selected>Select</option>

                <option value="Italian cuisine">Italian cuisine</option>
                <option value="French pastry">French pastry</option>
                <option value="Japanese sushi">Japanese sushi</option>
                <option value="Vegetarian/vegan cooking">Vegetarian/vegan cooking</option>
                <option value="Molecular gastronomy">Molecular gastronomy</option>
                <option value="BBQ/smoked meats">BBQ/smoked meats</option>
                <option value="Gluten-free baking">Gluten-free baking</option>
            </select>
            @error('specialization')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>
        <div class="mb-3">
            <label class="text-dark">Bio </label>
            <textarea type="text" class="form-control text-dark" name="bio" wire:model="bio">

            </textarea>
            @error('bio')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1" class="text-dark">chef Picture</label>
            <input type="file" wire:model="newImage" class="form-control text-dark">
            @error('newImage')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div>
            @if ($newImage)
                <label class="text-dark">Image Preview </label>
                <img src="{{ $newImage->temporaryUrl() }}" height="100" width="100">
            @elseif($chef->image)
                <label class="text-dark">Image Preview </label>

                <img src="{{ Storage::url($chef->image) }}" height="100" width="100" alt="Category Image">
            @endif
        </div>
        <!-- Loading Indicator for Image -->
        <div wire:loading wire:target="newImage">
            <div
                style="display: flex; align-items: center; padding: 10px; background-color: rgba(255, 255, 255, 0.8); border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <strong style="margin-right: 10px;">Loading...</strong>
                <div class="spinner-border text-primary" role="status" aria-hidden="true"></div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="button" wire:click="UpdateChef" class="btn btn-primary">Save </button>
        </div>

    </div>
</div>
