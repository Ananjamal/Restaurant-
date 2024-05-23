<div>
    <div class="card rounded-3">
        <div class="card-body p-4">
            @foreach ($orderItems as $item)
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 d-flex justify-content-center align-items-center text-center">
                                <p class="mb-0 text-muted small" style="font-size: 1.25rem;"># {{ ++$counter }}</p>
                            </div>
                            <div class="col-md-2">
                                <img src="{{ Storage::url($item->menu->image) }}" class="rounded-circle" height="100px" width="100px" alt="Item Image">
                            </div>
                            <div class="col-md-2 d-flex justify-content-center align-items-center text-center">
                                <p class="mb-0 text-muted" style="font-size: 1.25rem;">{{ $item->menu->name }}</p>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center align-items-center text-center">
                                <p class="mb-0 text-muted small" style="font-size: 1.25rem;">${{ $item->menu->price }}</p>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center align-items-center text-center">
                                <p class="mb-0 text-muted small" style="font-size: 1.25rem;">Qty: {{ $item->quantity }}</p>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center align-items-center text-center">
                                <p class="mb-0 text-muted small" style="font-size: 1.25rem;">Total: ${{ $item->total_price }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
