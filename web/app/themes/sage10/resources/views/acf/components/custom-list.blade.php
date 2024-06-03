@set($component, 'acf-list-' . get_sub_field('style'))

<ul class="acf-{{ layout() }} {{ $component }}">
    @fields('custom_list')

    @set($link, get_sub_field('id_link') ?: (get_sub_field('url') ?: '#'))

    @hassub('page_url')
        <a href="{{ $link }}" class="{{ $component }}__link" {{ Page::linkTarget() }}>
    @endsub

        <li class="{{ $component }}__item">
            @hassub('svg')
                <div class="{{ $component }}__icon icon-{{ str_replace('.', '-', get_sub_field('svg')) }}">
                    @include('svg.acf.' . get_sub_field('svg'))
                </div>
            @endsub

            @hassub('image')
                <div class="{{ $component }}__image">
                    <img class="acf-image" src="@sub('image', 'url')" alt="@sub('image', 'alt')">
                </div>
            @endsub

            @hassub('title')
                <div class="{{ $component }}__title">
                    @sub('title')
                </div>
            @endsub

            @hassub('text')
                <div class="{{ $component }}__text">
                    @sub('text')
                </div>
            @endsub
        </li>

    @hassub('page_url')
        </a>
    @endsub

    @endfields
</ul>
