@php
    $style = str_replace(' ', '-', strtolower(get_sub_field('class')));
    $margin = str_replace(' ', '-', strtolower(get_sub_field('margin_bottom')));
    $class = 'acf-btn' . ($style ? ' acf-btn-' . $style : '') . ($margin ? ' acf-margin-bottom--' . $margin : '');
@endphp

@set($link, get_sub_field('page_url') ? get_sub_field('page_url') : (get_sub_field('url') ? get_sub_field('url') : '#'))

@hassub('button_label')
    <a class="{{ $class }}" href="{{ $link }}">
        <span class="acf-btn__label">@sub('button_label')</span>
    </a>
@endsub
