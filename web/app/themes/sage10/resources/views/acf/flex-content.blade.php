<div class="acf-flex-content flex flex-col gap-16">
  <?php
  $rows = get_field('flex_content');
  if ($rows) {
      ?>
      @layouts('flex_content')
        @include ('acf.layouts.'. layout())
      @endlayouts
      <?php
  } else {
      echo '<p>No flexible content found.</p>';
  }
  ?>
</div>