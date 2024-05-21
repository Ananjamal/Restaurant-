<div class="main-panel p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Menu Table</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreateItem">
            <i class="fas fa-plus"></i>
            Add Item
        </button>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
            <div>
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="bg-light">
                <tr>
                    <th scope="col" class="text-center align-middle">#</th>
                    <th scope="col" class="text-center align-middle">Name</th>
                    <th scope="col" class="text-center align-middle">Category</th>
                    <th scope="col" class="text-center align-middle">Description</th>
                    <th scope="col" class="text-center align-middle">Image</th>
                    <th scope="col" class="text-center align-middle">Price</th>
                    <th scope="col" class="text-center align-middle">Availability</th>
                    <th scope="col" class="text-center align-middle">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menu as $item)
                    <tr>
                        <td class="text-center align-middle">
                            <h5>{{ ++$counter }}</h5>
                        </td>
                        <td class="text-center align-middle">
                            <h5>{{ $item->name }}</h5>
                        </td>
                        <td class="text-center align-middle">
                            <h5>{{ $item->category->name }}</h5>
                        </td>
                        <td class="text-center align-middle">
                            
                            <h5>{{ Str::limit($item->description, 50) }}</h5>
                        </td>
                        <td class="text-center align-middle">
                            <img src="{{ Storage::url($item->image) }}" alt="" class="rounded-circle"
                                style="width: 70px; height: 70px" />
                        </td>
                        <td class="text-center align-middle">
                            <h5>${{ $item->price }}</h5>
                        </td>
                        <td class="text-center align-middle">
                            <input type="checkbox" wire:click="toggleAvailability({{ $item->id }})" @if($item->availability) checked @endif>
                        </td>
                        <td class="text-center align-middle">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#EditItem" wire:click='editItem({{ $item->id }})'><i
                                    class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#DeleteItem" wire:click='deleteItem({{ $item->id }})'><i
                                    class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $menu->links('pagination-view') }}

    <!-- Create Modal -->
    <div wire:ignore.self class="modal fade" id="CreateItem" tabindex="-1" aria-labelledby="CreateItemLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateItemLabel">Create Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @livewire('admin.menus.create')
            </div>
        </div>
    </div>
    <!-- Create Modal -->

    <!-- Edit Modal -->
    <div wire:ignore.self class="modal fade" id="EditItem" tabindex="-1" aria-labelledby="EditItemLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditItemLabel">Edit Item</h5>
                    <button type="button" wire:click='refresh' class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                @if ($item_id)
                    @livewire('admin.menus.edit', [$item_id])
                @endif
            </div>
        </div>
    </div>
    <!-- Edit Modal -->

    <!-- Delete Modal -->
    <div wire:ignore.self class="modal fade" id="DeleteItem" tabindex="-1" aria-labelledby="DeleteItemLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteItemLabel">Confirm Deletion</h5>
                    <button type="button" wire:click='refresh' class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                @if ($item_id)
                    @livewire('admin.menus.delete', [$item_id])
                @endif
            </div>
        </div>
    </div>
    <!-- Delete Modal -->

</div>
