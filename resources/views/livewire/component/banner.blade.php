<div class="main-banner">
    <div class="owl-carousel owl-banner">
        @foreach ($banners as $banner)            
            <div class="item" style="background-image: url('{{ 'storage/'.$banner->image }}')">
                <div class="header-text">
                    <h2>{{ $banner->title }}</h2>
                    <p>
                        {{ $banner->description }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
