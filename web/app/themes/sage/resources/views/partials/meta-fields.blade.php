@php
// Get current page id
$queried_id = get_queried_object_id();

// Default meta fields from global options
$meta_fields = [
    'og:title' => get_field('meta_title', 'option'),
    'og:description' => get_field('meta_description', 'option'),
    'og:image' => get_field('meta_image', 'option'),
    'og:url' => get_field('meta_url', 'option'),
    'og:type' => get_field('meta_type', 'option'),
];

$meta_per_page = get_field('meta_per_page', 'option');
@endphp

@if ($meta_per_page)
    @foreach ($meta_per_page as $meta)
        @php
        // Convert the URL to a post ID
        $page_id = url_to_postid($meta['page_url']); 

        // If the current page matches, override the default meta fields
        if ($queried_id == $page_id) {
            $meta_fields = [
                'og:title' => $meta['meta_title'] ?: $meta_fields['og:title'],
                'og:description' => $meta['meta_description'] ?: $meta_fields['og:description'],
                'og:image' => $meta['meta_image'] ?: $meta_fields['og:image'],
                'og:url' => $meta['meta_url'] ?: $meta_fields['og:url'],
                'og:type' => $meta['meta_type'] ?: $meta_fields['og:type'],
            ];
        }
        @endphp
    @endforeach
@endif

@foreach ($meta_fields as $property => $content)
    @if (!empty($content))
        <meta property="{{ $property }}" content="{{ $content }}">
    @endif
@endforeach
