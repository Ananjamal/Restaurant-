<div class="main-panel p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Chefs Table</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreateChef">
            <i class="fas fa-plus"></i>
            Add Chef
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
                    <th scope="col" class="text-center align-middle">specialization</th>
                    <th scope="col" class="text-center align-middle">bio</th>
                    <th scope="col" class="text-center align-middle">Image</th>
                    <th scope="col" class="text-center align-middle">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chefs as $chef)
                    <tr>
                        <td class="text-center align-middle">
                            <h5>{{ ++$counter }}</h5>
                        </td>
                        <td class="text-center align-middle">
                            <h5>{{ $chef->name }}</h5>
                        </td>
                        <td class="text-center align-middle">
                            <h5>{{ $chef->specialization }}</h5>
                        </td>
                        <td class="text-center align-middle">
                            {{-- <h5>{{ $chef->bio }}</h5> --}}
                            <h5>{{ Str::limit($chef->bio, 50) }}</h5>

                        </td>
                        <td class="text-center align-middle">
                            <img src="{{ Storage::url($chef->image) }}" alt="" class="rounded-circle"
                                style="width: 70px; height: 70px" />
                        </td>
                        <td class="text-center align-middle">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#EditChef" wire:click ='editChef({{ $chef->id }})'><i
                                    class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#DeleteChef" wire:click ='deleteChef({{ $chef->id }})'><i
                                    class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <!--Create Modal -->
    <div wire:ignore.self class="modal fade" id="CreateChef" tabindex="-1" aria-labelledby="CreateChefLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateChefLabel">Create Chef</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @livewire('admin.chefs.create')

            </div>
        </div>
    </div>
    <!--Create Modal -->
    <!--Edit Modal -->
    <div wire:ignore.self class="modal fade" id="EditChef" tabindex="-1" aria-labelledby="EditChefLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditChefLabel">Edit Chef</h5>
                    <button type="button" wire:click='refresh' class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                @if ($chef_id)
                    @livewire('admin.chefs.edit', [$chef_id])
                @endif
            </div>
        </div>
    </div>
    <!--Edit Modal -->
    <!--Delete Modal -->
    <div wire:ignore.self class="modal fade" id="DeleteChef" tabindex="-1" aria-labelledby="DeleteChefLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteChefLabel">Confirm Deletion</h5>
                    <button type="button" wire:click='refresh' class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                @if ($chef_id)
                    @livewire('admin.chefs.delete', [$chef_id])
                @endif

            </div>
        </div>
    </div>
    <!--Delete Modal -->

</div>
