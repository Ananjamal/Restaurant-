<div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="text-center block-title">Our Gallery</h2>
                    <p class="text-center title-caption">There are many variations of passages of Lorem Ipsum available</p>
                </div>
                <div class="clearfix gal-container">
                    @foreach ($galleries as $item)
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <span>
                                    <img src="{{ Storage::Url($item->image) }}" alt="" />
                                </span>
                                {{-- <div class="modal fade" id="openPic" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" wire:click='refresh' data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            @if ($gallery_id)
                                                @livewire('website.galleries.show-picture', [$gallery_id])
                                            @endif
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
