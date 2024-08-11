@set($component, 'row')

<div @class([
    'acf-' . $component . ' flex flex-wrap',
    'reverse-columns' => get_sub_field('reverse_columns'),
    'items-stretch' => get_sub_field('vertical_alignment'),
    'items-center' => !get_sub_field('vertical_alignment'),
    'justify-' . get_sub_field('justify_content') => get_sub_field('justify_content')
])>
    @fields('columns')
    @group('settings')
    @php
        $colMDWidth = get_sub_field('column_md_width');
        $colLGWidth = get_sub_field('column_lg_width');
        $colMDWidthStyle = $colMDWidth ? ' md-w-' . round($colMDWidth) : '';
        $colLGWidthStyle = $colLGWidth ? ' lg-w-' . round($colLGWidth) : '';
        $hideColumn = get_sub_field('hide_on') ? (strtolower(get_sub_field('hide_on')) == 'mobile' ? ' md:hidden' : ' xl:hidden') : '';
    @endphp
    @endgroup

    <div class="acf-{{$component}}__col{{$colMDWidthStyle}}{{$colLGWidthStyle}}{{$hideColumn}}">
        @layouts('column_components')
            @include('acf.footer-components.' . layout())
        @endlayouts()
    </div>

    @endfields
</div>
