<div class="container-fluid page-body-wrapper">
    @livewire('admin.sidebar')
    @livewire('admin.navbar')
    @if ($categories)
        @livewire('admin.categories.categories')
    @elseif ($menus)
        @livewire('admin.menus.menus')
    @elseif ($coupons)
        @livewire('admin.coupons.coupons')
    @elseif ($orders)
        @livewire('admin.orders.orders')
    @else
        @livewire('admin.main')
    @endif
</div>
