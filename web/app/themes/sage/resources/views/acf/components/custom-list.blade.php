@php
$styleClass = get_sub_field('style');
$component =  $styleClass ? 'acf-list-' . get_sub_field('style') : '';

$sliderClass = get_sub_field('slider') ? 'swiper' : '';
$slideClass = $sliderClass ? " $sliderClass-slide" : '';

$className = $class_name ?? '';
@endphp

<ul class="acf-{{layout()}} {{$component}} {{$sliderClass}}">

    @hassub('slider')
        <div class="acf-{{layout()}}-slider swiper-container" id="{{$component}}">
            <div class="swiper-wrapper">
    @endsub

    @fields('custom_list')
        <li class="{{$component}}__item relative {{$slideClass}}{{$className}}{!!Page::textColor()!!}{!!Page::bg()!!}">
            {!!Page::bgImage()!!}
            @hassub('image')
                <div class="{{$component}}__image">
                    <img class="acf-image" src="@sub('image', 'url')" alt="@sub('image', 'alt')">
                </div>
            @endsub

            <div class="{{$component}}__content">
                @hassub('title')
                    <div class="{{$component}}__title">
                        @sub('title')
                    </div>
                @endsub

                @hassub('text')
                    <div class="{{$component}}__text">
                        @sub('text')
                    </div>
                @endsub

                @hassub('link')
                    <div class="{{$component}}__button">
                        @include('acf.fragments.button')
                    </div>
                @endsub
            </div>
        </li>
    @endfields

    @hassub('slider')
            </div>
        </div>

        <div class="acf-{{layout()}}__navigation">
            <div class="swiper-button-next {{$component}}-next">
                @include('svg.acf.arrow-right')
            </div>
            <div class="swiper-button-prev {{$component}}-prev">
                @include('svg.acf.arrow-left')
            </div>
        </div>
    @endsub
</ul>
