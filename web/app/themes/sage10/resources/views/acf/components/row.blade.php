@set($component, 'row')

<div class="acf-{{$component}} flex flex-col gap-16 
            @if(get_sub_field('reverse_columns')) flex-col-reverse @endif
            @if(get_sub_field('vertical_alignment')) items-stretch @else items-center @endif
            @if(get_sub_field('justify_content')) justify-{{ get_sub_field('justify_content') }} @endif">
    @fields('columns')
    @group('settings')
    @set($colMDWidth_class, get_sub_field('column_md_width') ? ' md:w-' . get_sub_field('column_md_width') : '')
    @set($colLGWidth_class, get_sub_field('column_lg_width') ? ' lg:w-' . get_sub_field('column_lg_width') : '')
    @set($hideColumn, get_sub_field('hide_on') ? ' hidden ' . strtolower(get_sub_field('hide_on')) : '')
    @endgroup

    <div class="acf-{{$component}}__col{{$colMDWidth_class}}{{$colLGWidth_class}}{{$hideColumn}}">
        @layouts('column_components')
            @include('acf.components.' . layout())
        @endlayouts()
    </div>

    @endfields
</div>
