@php
    $style = strtolower(str_replace(' ', '-', get_sub_field('class')));
    $margin = strtolower(str_replace(' ', '-', get_sub_field('margin_bottom')));
    $styleClass = $style ? 'acf-btn-' . $style : '';

    $marginClass = '';
    if ($margin) {
        switch ($margin) {
            case 'small':
                $marginClass = 'acf-small-margin';
                break;
            case 'normal':
                $marginClass = 'acf-normal-margin';
                break;
            case 'large':
                $marginClass = 'acf-large-margin';
                break;
            default:
                $marginClass = '';
        }
    }

    $class = $styleClass . ' ' . $marginClass;

    // Determine the link URL
    $link = get_sub_field('link');
    $link_url = $link['url'];
    $link_title = esc_html($link['title']);
    $link_target = $link['target'] ? $link['target'] : '_self';
@endphp

@hassub('link')
    <a class="acf-btn {{ $class }}" href="{{ $link_url }}" target="{{$link_target}}">
        <span class="btn-label"><?= $link_title ?></span>
    </a>
@endsub
