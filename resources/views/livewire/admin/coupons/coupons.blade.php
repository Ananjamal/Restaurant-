<div class="main-panel p-4">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Coupons Table</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreateCoupon">
            <i class="fas fa-plus"></i>
            Add Coupon
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
                <th scope="col" class="text-center align-middle">Code</th>
                <th scope="col" class="text-center align-middle">Discount</th>
                <th scope="col" class="text-center align-middle">Valid_From</th>
                <th scope="col" class="text-center align-middle">Valid_Until</th>
                <th scope="col" class="text-center align-middle">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample rows (replace with dynamic content) -->
            @foreach ($coupons as $coupon)
                <tr>
                    <td class="text-center align-middle">
                        <h5>{{ ++$counter }}</h5>
                    </td>
                    <td class="text-center align-middle">
                        <h5>{{ $coupon->code }}</h5>
                    </td>
                    <td class="text-center align-middle">
                        <h5>${{ $coupon->discount_amount }}</h5>
                    </td>
                    <td class="text-center align-middle">
                        <h5>{{ $coupon->valid_from }}</h5>
                    </td> <td class="text-center align-middle">
                        <h5>{{ $coupon->valid_until }}</h5>
                    </td>

                    <td class="text-center align-middle">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#EditCoupon" wire:click ='editCoupon({{ $coupon->id }})'><i
                                class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#DeleteCoupon" wire:click ='deleteCoupon({{ $coupon->id }})'><i
                                class="bi bi-trash"></i></button>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>
    {{-- {{ $categories->links('pagination-view') }} --}}

    <!--Create Modal -->
    <div wire:ignore.self class="modal fade" id="CreateCoupon" tabindex="-1" aria-labelledby="CreateCategoryLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateCouponLabel">Create Coupon</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @livewire('admin.coupons.create')

            </div>
        </div>
    </div>
    <!--Create Modal -->
    <!--Edit Modal -->
    <div wire:ignore.self class="modal fade" id="EditCoupon" tabindex="-1" aria-labelledby="EditCouponLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditCouponLabel">Edit Coupon</h5>
                    <button type="button" wire:click='refresh' class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                @if ($coupon_id)
                    @livewire('admin.coupons.edit', [$coupon_id])
                @endif
            </div>
        </div>
    </div>
    <!--Edit Modal -->
    <!--Delete Modal -->
    <div wire:ignore.self class="modal fade" id="DeleteCoupon" tabindex="-1" aria-labelledby="DeleteCouponLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteCouponLabel">Confirm Deletion</h5>
                    <button type="button" wire:click='refresh' class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                @if ($coupon_id)
                    @livewire('admin.coupons.delete', [$coupon_id])
                @endif

            </div>
        </div>
    </div>
    <!--Delete Modal -->

</div>
