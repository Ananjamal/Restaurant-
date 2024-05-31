<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        @livewire('website.header')
        <!-- end header -->
    </div>
    <!-- end site-header -->
    <div id="banner" class="banner full-screen-mode parallax">
        @livewire('website.banner')

    </div>
    <!-- end banner -->
    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        @livewire('website.about')

    </div>
    <div class="special-menu pad-top-100 parallax">
        {{-- @livewire('website.menus.special-menu') --}}

    </div>
    <!-- end special-menu -->
    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        @livewire('website.menus.menus')

    </div>
    <!-- end menu -->
    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
        @livewire('website.team.chief')

    </div>
    <!-- end team-main -->
    <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
        @livewire('website.galleries.galleries')

    </div>
    <!-- end gallery-main -->
    <div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
        {{-- @livewire('website.blog.blog') --}}

    </div>
    <!-- end blog-main -->
    <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
        @livewire('website.reservations.reservations')

    </div>
    <!-- end reservations-main -->
    <div id="footer" class="footer-main">
        @livewire('website.footer')
    </div>
    <!-- end footer-main -->
</div>
