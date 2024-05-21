<div>

    <div class="modal-body">

        <div class="mb-3 input-container">
            <label class="text-dark">Item Name</label>
            <input type="text" wire:model="name" class="form-control text-dark">
            @error('name')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>
        <div class="mb-3 input-container">
            <label for="categories" class="text-dark">Choose a Category:</label>
            <select class="form-select text-dark" id="categories" wire:model="category_id">
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="text-dark">Description</label>
            <textarea class="form-control text-dark" name="description" wire:model="description"></textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="text-dark">Price($)</label>
            <input type="text" class="form-control text-dark" name="price" wire:model="price">
            @error('price')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1" class="text-dark">Item Picture</label>
            <input type="file" wire:model="newImage" class="form-control text-dark">
            @error('newImage')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div>
            @if ($newImage)
                <label class="text-dark">Image Preview </label>
                <img src="{{ $newImage->temporaryUrl() }}" height="100" width="100">
            @elseif($item->image)
                <label class="text-dark">Image Preview </label>

                <img src="{{ Storage::url($item->image) }}" height="100" width="100" alt="Category Image">
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
            <button type="button" wire:click='refresh' class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" wire:click="UpdateItem" class="btn btn-primary">Save </button>
        </div>

    </div>
</div>
