<div class="sidebar sidebar-offcanvas" id="sidebar">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#" wire:click='category'>
                    <i class="fa-solid fa-layer-group menu-icon" style="color: rgb(30, 0, 255);"></i>
                    <span class="menu-title">Categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" wire:click='menu'>
                    <i class="fa-solid fa-pizza-slice menu-icon" style="color: rgb(30, 0, 255);"></i>
                    <span class="menu-title">Menu</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" wire:click='coupon'>
                    <i class="fa-solid fa-dollar-sign menu-icon" style="color: rgb(30, 0, 255);"></i>
                    <span class="menu-title">Coupons</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" wire:click='order'>
                    <i class="fa-solid fa-bell-concierge menu-icon" style="color: rgb(30, 0, 255);"></i>
                    <span class="menu-title">Orders</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" wire:click='table'>
                    <i class="fa-solid fa-chair menu-icon" style="color: rgb(30, 0, 255);"></i>
                    <span class="menu-title">Tables</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" wire:click='reservation'>
                    <i class="fa-regular fa-calendar-days menu-icon" style="color: rgb(30, 0, 255);"></i>
                    <span class="menu-title">Reservations</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" wire:click='chef'>
                    <i class="fa-solid fa-hot-tub-person menu-icon" style="color: rgb(30, 0, 255);"></i>
                    <span class="menu-title">chefs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" wire:click='gallery'>
                    <i class="fa-solid fa-images menu-icon" style="color: rgb(30, 0, 255);"></i>
                    <span class="menu-title">Gallery</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" wire:click='message'>
                    <i class="fa-solid fa-comments menu-icon" style="color: rgb(30, 0, 255);"></i>
                    <span class="menu-title">Messages</span>
                </a>
            </li>
            {{-- <li class="nav-item">
            <a class="nav-link" wire:click='category'>
                 <span class="menu-title">Categories</span>
            </a>
        </li> --}}
            {{-- <li class="nav-item nav-category">UI Elements</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Form elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="docs/documentation.html">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> --}}
        </ul>
    </nav>
</div>
