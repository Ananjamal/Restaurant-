<div class="main-panel p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Orders Table</h1>

    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
            <div>
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
            <div>
                {{ session('error') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="bg-light">
                <tr>
                    <th scope="col" class="text-center align-middle">Date</th>
                    <th scope="col" class="text-center align-middle">Order #</th>
                    <th scope="col" class="text-center align-middle">Name</th>
                    <th scope="col" class="text-center align-middle">Total Price</th>
                    <th scope="col" class="text-center align-middle">Details</th>
                    <th scope="col" class="text-center align-middle">Status</th>
                    <th scope="col" class="text-center align-middle">Complete Order</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $item)
                    <tr>
                        <td class="text-center align-middle">
                            <h5>{{ $item->created_at }}</h5>
                        </td>
                        <td class="text-center align-middle">
                            <h5>{{ $item->id }}</h5>
                        </td>
                        <td class="text-center align-middle">
                            <h5>{{ $item->userAddress->first_name }}</h5>
                        </td>
                        <td class="text-center align-middle">
                            <h5>{{ $item->total_amount }}</h5>
                        </td>

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
                            <a wire:click='completeOrder({{ $item->id }})' class="btn btn-success btn-sm"
                                data-bs-toggle="modal" data-bs-target="#completeOrder">
                                <i class="fa-solid fa-check"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- {{ $menu->links('pagination-view') }} --}}

    <div wire:ignore.self class="modal fade" data-bs-backdrop='static' id="orderDetails" tabindex="-1"
        aria-labelledby="orderDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderDetailsModalLabel">Order Details</h5>
                    <button type="button" wire:click='refresh' class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div>
                    @if ($order_id)
                        @livewire('admin.orders.order-details', [$order_id])
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="completeOrder" tabindex="-1" aria-labelledby="completeOrderLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="completeOrderLabel">Complete Confirm</h5>
                    <button type="button" wire:click='refresh' class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                @if ($order_id)
                    @livewire('admin.orders.complete-order', [$order_id])
                @endif
            </div>
        </div>
    </div>
    <!-- Edit Modal -->


</div>
