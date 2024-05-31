<div class="main-panel p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Reservation Table</h1>

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
                    <th scope="col" class="text-center align-middle">Email</th>
                    <th scope="col" class="text-center align-middle">Phone</th>
                    <th scope="col" class="text-center align-middle"># of Table</th>
                    <th scope="col" class="text-center align-middle">Date</th>
                    <th scope="col" class="text-center align-middle">Time</th>
                    <th scope="col" class="text-center align-middle"># of Guests</th>
                    <th scope="col" class="text-center align-middle">Occasion</th>
                    <th scope="col" class="text-center align-middle">Status</th>
                    {{-- <th scope="col" class="text-center align-middle">Actions</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $item)
                    <tr>
                        <td class="text-center align-middle">
                            <h5>{{ ++$counter }}</h5>
                        </td>
                        <td class="text-center align-middle">
                            <h5>{{ $item->name }}</h5>
                        </td>
                        <td class="text-center align-middle">
                            <h5>{{ $item->email }}</h5>
                        </td>
                        <td class="text-center align-middle">

                            <h5>{{ $item->phone }}</h5>
                        </td>
                        <td class="text-center align-middle">
                            <h5>{{ $item->table->id }}</h5>
                        </td>

                        <td class="text-center align-middle">

                            <h5>{{ $item->reservation_date }}</h5>
                        </td>
                        <td class="text-center align-middle">

                            <h5>{{ $item->reservation_time }}</h5>
                        </td>
                        <td class="text-center align-middle">

                            <h5>{{ $item->num_guests }}</h5>
                        </td>
                        </td>
                        <td class="text-center align-middle">

                            <h5>{{ $item->occasion }}</h5>
                        </td>
                        </td>
                        <td class="text-center align-middle">
                            @if ($item->status == 'cancelled')
                                <span class="badge bg-danger">{{ $item->status }}</span>
                            @elseif ($item->status == 'confirmed')
                                <span class="badge bg-success">{{ $item->status }}</span>
                            @endif
                        </td>

                        {{-- <td class="text-center align-middle">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#EditItem" wire:click='editItem({{ $item->id }})'><i
                                    class="bi bi-pencil-square">
                                </i>
                            </button>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


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
                {{-- @if ($item_id)
                    @livewire('admin.menus.edit', [$item_id])
                @endif --}}
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
                {{-- @if ($item_id)
                    @livewire('admin.menus.delete', [$item_id])
                @endif --}}
            </div>
        </div>
    </div>
    <!-- Delete Modal -->

</div>
