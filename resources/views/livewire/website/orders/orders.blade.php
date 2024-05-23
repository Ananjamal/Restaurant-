<div>
    <section class="intro bg-image d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 mt-3 text-center">
                    <h1 class="display-4">My Orders</h1>
                </div>
            </div>
            <div class="card shadow mb-5">
                <div class="card-body">
                    <div class="table-responsive">
                        @if ($orders->isEmpty())
                            <div class="col-md-6 m-auto text-center">
                                <p class="display-5">There Is No Orders Yet.</p>
                            </div>
                        @else
                            <table class="table table-borderless mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="text-center align-middle">Date</th>
                                        <th scope="col" class="text-center align-middle">Order #</th>
                                        <th scope="col" class="text-center align-middle">Name</th>
                                        <th scope="col" class="text-center align-middle">Total Price</th>
                                        <th scope="col" class="text-center align-middle">Details</th>
                                        <th scope="col" class="text-center align-middle">Status</th>
                                        <th scope="col" class="text-center align-middle">Cancel order</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item)
                                        <tr>
                                            <td class="text-center align-middle">{{ $item->created_at }}</td>
                                            <td class="text-center align-middle">{{ $item->id }}</td>
                                            <td class="text-center align-middle">{{ $item->userAddress->first_name }}
                                            </td>
                                            <td class="text-center align-middle">$ {{ $item->total_amount }}</td>
                                            <td class="text-center align-middle">
                                                <a wire:click='orderDetails({{ $item->id }})' data-bs-toggle="modal"
                                                    data-bs-target="#orderDetails" class="btn btn-info btn-sm">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                            </td>
                                            <td class="text-center align-middle">
                                                @if ($item->status == 'pending')
                                                    <span class="badge bg-warning text-dark">{{ $item->status }}</span>
                                                @elseif ($item->status == 'cancelled')
                                                    <span class="badge bg-danger">{{ $item->status }}</span>
                                                @elseif ($item->status == 'delivered')
                                                    <span class="badge bg-success">{{ $item->status }}</span>
                                                @endif
                                            </td>
                                            <td class="text-center align-middle">
                                                <a wire:click='cancelOrder({{ $item->id }})'
                                                    class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#cancelOrder">
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

    <div wire:ignore.self class="modal fade" data-bs-backdrop='static' id="cancelOrder" tabindex="-1" aria-labelledby="cancelOrderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="cancelOrderModalLabel">Cancel Order</h5>
                    <button type="button" wire:click='refresh' class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div>
                    @if ($order_id)
                        @livewire('website.orders.cancel-order', [$order_id])
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" data-bs-backdrop='static' id="orderDetails" tabindex="-1" aria-labelledby="orderDetailsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderDetailsModalLabel">Order Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div>
                    @if ($order_id)
                        @livewire('website.orders.order-details', [$order_id])
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
