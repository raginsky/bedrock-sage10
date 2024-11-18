@set($component, 'acf-' . layout())

@wrapper(div)
<ul class="{{$component}}">
    @hassub('menu_title')
    <li class="mb-4 font-bold {{$component}}__title">@sub('menu_title')</li>
    @endsub
@fields('menu_items')
    @php
    $link = get_sub_field('link');
    $link_url = $link && $link['url'] ? $link['url'] : '';
    $link_title = $link && $link['title'] ? esc_html($link['title']) : '';
    $link_target = $link && $link['target'] ? $link['target'] : '_self';

    $weight = strtolower(get_sub_field('font_weight'));
    $weightClass = '';
    switch ($weight) {
        case 'normal':
            $weightClass = ' font-normal';
            break;
        case 'light':
            $weightClass = ' font-light';
            break;
        case 'medium':
            $weightClass = ' font-medium';
            break;
        case 'bold':
            $weightClass = ' font-bold';
            break;
    }
    @endphp
    @if($link)
        <li class="mb-4">
            <a href="{{ $link_url }}" target="{{ $link_target }}" class="hover:text-blue-700 no-underline{{$weightClass}}"
            aria-label="{{$link_title}}"
            >
                <?= $link_title ?>
            </a>
        </li>
        @endif
        @endfields
    </ul>
@endwrapper(div)
