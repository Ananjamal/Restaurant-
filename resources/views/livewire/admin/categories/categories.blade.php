<div class="main-panel p-4">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Categories Table</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreateCategory">
            <i class="fas fa-plus"></i>
            Add Category
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
                <th scope="col" class="text-center align-middle">Name</th>
                <th scope="col" class="text-center align-middle">Description</th>
                <th scope="col" class="text-center align-middle">Image</th>
                <th scope="col" class="text-center align-middle">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample rows (replace with dynamic content) -->
            @foreach ($categories as $category)
                <tr>
                    <td class="text-center align-middle">
                        <h5>{{ ++$counter }}</h5>
                    </td>
                    <td class="text-center align-middle">
                        <h5>{{ $category->name }}</h5>
                    </td>
                    <td class="text-center align-middle">
                        <h5>{{ $category->description }}</h5>
                    </td>
                    <td class="text-center align-middle">
                        <img src="{{ Storage::url($category->image) }}" alt="" class="rounded-circle"
                            style="width: 70px; height: 70px" />
                    </td>
                    <td class="text-center align-middle">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#EditCategory" wire:click ='editCategory({{ $category->id }})'><i
                                class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#DeleteCategory" wire:click ='deleteCategory({{ $category->id }})'><i
                                class="bi bi-trash"></i></button>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>
    {{ $categories->links('pagination-view') }}

    <!--Create Modal -->
    <div wire:ignore.self class="modal fade" id="CreateCategory" tabindex="-1" aria-labelledby="CreateCategoryLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateCategoryLabel">Create Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @livewire('admin.categories.create')

            </div>
        </div>
    </div>
    <!--Create Modal -->
    <!--Edit Modal -->
    <div wire:ignore.self class="modal fade" id="EditCategory" tabindex="-1" aria-labelledby="EditCategoryLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditCategoryLabel">Edit Category</h5>
                    <button type="button" wire:click='refresh' class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                @if ($category_id)
                    @livewire('admin.categories.edit', [$category_id])
                @endif
            </div>
        </div>
    </div>
    <!--Edit Modal -->
    <!--Delete Modal -->
    <div wire:ignore.self class="modal fade" id="DeleteCategory" tabindex="-1" aria-labelledby="DeleteCategoryLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteCategoryLabel">Confirm Deletion</h5>
                    <button type="button" wire:click='refresh' class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                @if ($category_id)
                    @livewire('admin.categories.delete', [$category_id])
                @endif

            </div>
        </div>
    </div>
    <!--Delete Modal -->

</div>
