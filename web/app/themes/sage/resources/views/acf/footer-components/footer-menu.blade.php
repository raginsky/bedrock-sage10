@set($component, 'acf-' . layout())

@wrapper(div)
<ul class="{{$component}}">
    @hassub('menu_title')
    <li class="mb-4 font-bold {{$component}}__title">@sub('menu_title')</li>
    @endsub
@fields('menu_items')
    @php
    $link = get_sub_field('link');
    $link_url = $link['url'];
    $link_title = esc_html($link['title']);
    $link_target = $link['target'] ? $link['target'] : '_self';

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
        case 'black':
            $weightClass = ' font-black';
            break;
    }
    @endphp
        <li class="mb-4">
            <a href="{{ $link_url }}" target="{{ $link_target }}" class="hover:text-blue-700 no-underline{{$weightClass}}">
                <?= $link_title ?>
            </a>
        </li>
        @endfields
    </ul>
@endwrapper(div)