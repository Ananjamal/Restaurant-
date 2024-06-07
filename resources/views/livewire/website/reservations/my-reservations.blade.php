<div>

    <section class="intro bg-image d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 mt-3 text-center">
                    <h1 class="display-4">Reservations</h1>
                </div>
            </div>
            <div class="card shadow mb-5">
                <div class="card-body">
                    <div class="table-responsive">
                        @if ($reservations->isEmpty())
                            <div class="col-md-6 m-auto text-center">
                                <p class="display-5">There Is No Reservations Yet.</p>
                            </div>
                        @else
                            <table class="table table-borderless mb-0">
                                <thead class="table-light">
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
                                        <th scope="col" class="text-center align-middle">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as $item)
                                        <tr>
                                            <td class="text-center align-middle">{{ ++$counter }}</td>
                                            <td class="text-center align-middle">{{ $item->name }}</td>
                                            <td class="text-center align-middle">{{ $item->email }}
                                            </td>
                                            <td class="text-center align-middle"> {{ $item->phone }}</td>
                                            <td class="text-center align-middle">
                                                {{ $item->table->id }}
                                            </td>
                                            <td class="text-center align-middle">
                                                {{ $item->reservation_date }}
                                            </td>
                                            <td class="text-center align-middle">
                                                {{ $item->reservation_time }}
                                            </td>
                                            </td>
                                            <td class="text-center align-middle">
                                                {{ $item->num_guests }}
                                            </td>
                                            </td>
                                            <td class="text-center align-middle">
                                                {{ $item->occasion }}
                                            </td>

                                            <td class="text-center align-middle">
                                                @if ($item->status == 'cancelled')
                                                    <span class="badge bg-danger">{{ $item->status }}</span>
                                                @elseif ($item->status == 'confirmed')
                                                    <span class="badge bg-success">{{ $item->status }}</span>
                                                @endif
                                            </td>
                                            <td class="text-center align-middle">
                                                <a wire:click='cancelResresvation({{ $item->id }})'
                                                    class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#cancelReservation">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div wire:ignore.self class="modal fade" data-bs-backdrop='static' id="cancelReservation" tabindex="-1"
        aria-labelledby="cancelReservationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="cancelReservationModalLabel">Cancel Reservation</h5>
                    <button type="button" wire:click='refresh' class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div>
                    @if ($reservation_id)
                        @livewire('website.reservations.cancel-reservation', [$reservation_id])
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
