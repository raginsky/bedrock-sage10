@php
    $style = strtolower(str_replace(' ', '-', get_sub_field('class')));
    $margin = strtolower(str_replace(' ', '-', get_sub_field('margin_bottom')));
    $styleClass = $style ? 'acf-btn-' . $style : '';
    
    $margin_bottom = get_sub_field('margin_bottom');
    $marginClass = $margin_bottom ? " acf-margin-$margin_bottom" : '';

    $class = $styleClass . ' ' . $marginClass;

    // Determine the link URL
    $link = get_sub_field('link');
    $link_url = $link && $link['url'] ? $link['url'] : '';
    $link_title = $link && $link['title'] ? esc_html($link['title']) : '';
    $link_target = $link && $link['target'] ? $link['target'] : '_self';
@endphp

@hassub('link')
<a class="acf-btn {{ $class }}" href="{{ $link_url }}" aria-label="{{$link_title}}" target="{{$link_target}}">
        <span class="btn-label"><?= $link_title ?></span>
    </a>
@endsub
