@wrapper(div)
@fields('menu_items')
    @php
        $link = get_sub_field('page_url') ?: '#';
        $target = get_sub_field('target') ?: '_self';
    @endphp
    <div class="mb-4">
        <a href="{{ $link }}" target="{{ $target }}" class="text-blue-500 hover:text-blue-700">
            <span class="font-semibold">@sub('menu_label')</span>
        </a>
    </div>
@endfields
@endwrapper(div)
