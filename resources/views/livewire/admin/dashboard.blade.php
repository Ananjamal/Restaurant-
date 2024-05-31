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
    @elseif ($tables)
        @livewire('admin.tables.tables')
    @elseif ($reservations)
        @livewire('admin.reservations.reservations')
    @elseif ($chefs)
        @livewire('admin.chefs.chefs')
    @else
        @livewire('admin.main')
    @endif
</div>
