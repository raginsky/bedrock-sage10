@set($component, 'row')

<div class="acf-{{$component}} {{ Page::rowOrReverse() }}{{ Page::verticalAlignment() }}{{ Page::justifyContent() }}">
    @fields('columns')
    @group('settings')

    @set($colMDWidth_class, get_sub_field('column_md_width') ? ' acf-' . get_sub_field('column_md_width') : '')
    @set($colLGWidth_class, get_sub_field('column_lg_width') ? ' acf-' . get_sub_field('column_lg_width') : '')
    @set($hideColumn, get_sub_field('hide_on') ? ' acf-columns-hide-' . strtolower(get_sub_field('hide_on')) : '')

    <div class="acf-{{$component}}__col{{$colMDWidth_class}}{{$colLGWidth_class}}{{$hideColumn}}">
        @layouts('column_components')
            @include('acf.footer-components.' . layout())
        @endlayouts()
    </div>

    @endgroup
    @endfields
</div>