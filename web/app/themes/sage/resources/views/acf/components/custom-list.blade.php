@php
$styleClass = get_sub_field('style');
$component =  $styleClass ? 'acf-list-' . get_sub_field('style') : '';

$sliderClass = get_sub_field('slider') ? 'swiper' : '';
$slideClass = $sliderClass ? " $sliderClass-slide" : '';

$className = $class_name ?? '';

$tagParent = get_sub_field('slider') ? 'div' : 'ul'; 
$tagChild = get_sub_field('slider') ? 'div' : 'li'; 
@endphp

<{{$tagParent}} class="acf-{{ layout() }} {{$component}} {{$sliderClass}}">

    @hassub('slider')
        <div class="acf-{{ layout() }}-slider swiper-container" id="{{$component}}">
            <div class="swiper-wrapper">
    @endsub

    @fields('custom_list')
        <{{$tagChild}} class="{{$component}}__item relative {{$slideClass}}{{$className}}{!! Page::textColor() !!}{!! Page::bg() !!}">
            {!! Page::bgImage() !!}
            
            @hassub('image')
                <div class="{{$component}}__image">
                    <img class="acf-image" src="@sub('image', 'url')" alt="@sub('image', 'alt')"
                    loading="lazy">
                </div>
            @endsub

            @if(get_sub_field('title') || get_sub_field('text'))
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
            </div>
            @endif

            @hassub('link')
                <div class="{{$component}}__button">
                    @include('acf.fragments.button')
                </div>
            @endsub
        </{{$tagChild}}>
    @endfields

    @hassub('slider')
            </div>
            <div class="acf-{{ layout() }}__navigation">
                <div class="swiper-pagination"></div>
            </div>
        </div>
    @endsub
</{{$tagParent}}>
