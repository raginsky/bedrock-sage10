@wrapper(footer)
{!! Page::bgImage() !!}
<div class="acf-footer__container">
@layouts('footer_components')
@include('acf.footer-components.' . layout())
@endlayouts()
</div>
@endwrapper(footer)



