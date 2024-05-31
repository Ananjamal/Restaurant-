<div class="main-panel p-4">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Gallery Table</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreateGallery">
            <i class="fas fa-plus"></i>
            Add Picture
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

    <table class="table table-hover">
        <thead class="bg-light">
            <tr>
                <th scope="col" class="text-center align-middle">#</th>
                <th scope="col" class="text-center align-middle">Title</th>
                <th scope="col" class="text-center align-middle">Description</th>
                <th scope="col" class="text-center align-middle">Image</th>
                <th scope="col" class="text-center align-middle">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample rows (replace with dynamic content) -->
            @foreach ($galleries as $item)
                <tr>
                    <td class="text-center align-middle">
                        <h5>{{ ++$counter }}</h5>
                    </td>
                    <td class="text-center align-middle">
                        <h5>{{ $item->title }}</h5>
                    </td>
                    <td class="text-center align-middle">
                        <h5>{{ $item->description }}</h5>
                    </td>
                    <td class="text-center align-middle">
                        <img src="{{ Storage::url($item->image) }}" alt="" class="rounded-circle"
                            style="width: 70px; height: 70px" />
                    </td>
                    <td class="text-center align-middle">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#EditGallery" wire:click ='editGallery({{ $item->id }})'><i
                                class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#DeleteGallery" wire:click ='deleteGallery({{ $item->id }})'><i
                                class="bi bi-trash"></i></button>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>
    {{ $galleries->links('pagination-view') }}

    <!--Create Modal -->
    <div wire:ignore.self class="modal fade" id="CreateGallery" tabindex="-1" aria-labelledby="CreateGalleryLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateGalleryLabel">Create Gallery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @livewire('admin.galleries.create')

            </div>
        </div>
    </div>
    <!--Create Modal -->
    <!--Edit Modal -->
    <div wire:ignore.self class="modal fade" id="EditGallery" tabindex="-1" aria-labelledby="EditGalleryLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditGalleryLabel">Edit Gallery</h5>
                    <button type="button" wire:click='refresh' class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                @if ($gallery_id)
                    @livewire('admin.galleries.edit', [$gallery_id])
                @endif
            </div>
        </div>
    </div>
    <!--Edit Modal -->
    <!--Delete Modal -->
    <div wire:ignore.self class="modal fade" id="DeleteGallery" tabindex="-1" aria-labelledby="DeleteGalleryLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteGalleryLabel">Confirm Deletion</h5>
                    <button type="button" wire:click='refresh' class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                @if ($gallery_id)
                    @livewire('admin.galleries.delete', [$gallery_id])
                @endif

            </div>
        </div>
    </div>
    <!--Delete Modal -->

</div>
