@set($component, 'row')

<div class="acf-{{$component}} flex flex-col gap-16 
            @if(get_sub_field('reverse_columns')) flex-col-reverse @endif
            @if(get_sub_field('vertical_alignment')) items-stretch @else items-center @endif
            @if(get_sub_field('justify_content')) justify-{{ get_sub_field('justify_content') }} @endif">
    @fields('columns')
    @group('settings')
    @php
        $colMDWidthClass = get_sub_field('column_md_width') ? 'md:w-' . get_sub_field('column_md_width') . '/12' : '';
        $colLGWidthClass = get_sub_field('column_lg_width') ? 'lg:w-' . get_sub_field('column_lg_width') . '/12' : '';
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
