@wrapper(footer)
{!! Page::bgImage() !!}
@container
@layouts('footer_components')
@include('acf.footer-components.' . layout())
@endlayouts()
@endcontainer
@endwrapper(footer)



