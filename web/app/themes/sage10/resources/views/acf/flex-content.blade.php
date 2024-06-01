<div class="acfm-flex-content">
  @php
    global $rows;
    $rows = get_field('flex_content');
  @endphp
  @layouts('flex_content')
  @include ('acf.layouts.'. get_row_layout())
  @endlayouts
</div>
