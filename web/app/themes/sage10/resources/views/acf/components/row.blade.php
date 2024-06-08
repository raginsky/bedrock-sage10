@set($component, 'row')

<div @class([
    'acf-' . $component . ' flex flex-row',
    'flex-col-reverse' => get_sub_field('reverse_columns'),
    'items-stretch' => get_sub_field('vertical_alignment'),
    'items-center' => !get_sub_field('vertical_alignment'),
    'justify-' . get_sub_field('justify_content') => get_sub_field('justify_content')
])>
    @fields('columns')
    @group('settings')
    @php
        $colMDWidthClass = get_sub_field('column_md_width') ? ' md:' . get_sub_field('column_md_width') : '';
        $colLGWidthClass = get_sub_field('column_lg_width') ? ' lg:' . get_sub_field('column_lg_width') : '';
        $hideColumn = get_sub_field('hide_on') ? (strtolower(get_sub_field('hide_on')) == 'mobile' ? ' md:hidden' : ' lg:hidden') : '';
    @endphp
    @endgroup

    <div class="acf-{{$component}}__col{{$colMDWidthClass}}{{$colLGWidthClass}}{{$hideColumn}}">
        @layouts('column_components')
            @include('acf.components.' . layout())
        @endlayouts()
    </div>

    @endfields
</div>
