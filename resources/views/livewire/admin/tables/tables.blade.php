<div class="main-panel p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Tables Table</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreateTable">
            <i class="fas fa-plus"></i>
            Add Table
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
                    <th scope="col" class="text-center align-middle">Table_id</th>
                    <th scope="col" class="text-center align-middle">Capacity</th>
                    <th scope="col" class="text-center align-middle">Status</th>
                    <th scope="col" class="text-center align-middle">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tables as $table)
                    <tr>
                        <td class="text-center align-middle">
                            <h5>{{ ++$counter }}</h5>
                        </td>
                        <td class="text-center align-middle">
                            <h5>{{ $table->id }}</h5>
                        </td>
                        <td class="text-center align-middle">
                            <h5>{{ $table->capacity }}</h5>
                        </td>

                        <td class="text-center align-middle">
                            <input type="checkbox" wire:click="toggleAvailability({{ $table->id }})" @if($table->status) checked @endif>
                        </td>

                        <td class="text-center align-middle">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#EditTable" wire:click='editTable({{ $table->id }})'><i
                                    class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#DeleteTable" wire:click='deleteTable({{ $table->id }})'><i
                                    class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- {{ $tables->links('pagination-view') }} --}}

    <!-- Create Modal -->
    <div wire:ignore.self class="modal fade" id="CreateTable" tabindex="-1" aria-labelledby="CreateItemLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateTableLabel">Create Table</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @livewire('admin.tables.create')
            </div>
        </div>
    </div>
    <!-- Create Modal -->

    <!-- Edit Modal -->
    <div wire:ignore.self class="modal fade" id="EditTable" tabindex="-1" aria-labelledby="EditItemLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditTableLabel">Edit Table</h5>
                    <button type="button" wire:click='refresh' class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                @if ($table_id)
                    @livewire('admin.tables.edit', [$table_id])
                @endif
            </div>
        </div>
    </div>
    <!-- Edit Modal -->

    <!-- Delete Modal -->
    <div wire:ignore.self class="modal fade" id="DeleteTable" tabindex="-1" aria-labelledby="DeleteItemLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditTableLabel">Confirm Deletion</h5>
                    <button type="button" wire:click='refresh' class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                @if ($table_id)
                    @livewire('admin.tables.delete', [$table_id])
                @endif
            </div>
        </div>
    </div>
    <!-- Delete Modal -->

</div>
