@php
    $style = strtolower(str_replace(' ', '-', get_sub_field('class')));
    $margin = strtolower(str_replace(' ', '-', get_sub_field('margin_bottom')));

    // Define Tailwind CSS classes based on ACF fields
    $styleClass = '';
    if ($style) {
        switch ($style) {
            case 'primary':
                $styleClass = 'bg-blue-500 text-white border border-blue-500 hover:bg-blue-700';
                break;
            case 'secondary':
                $styleClass = 'text-gray-700 underline hover:text-blue-700';
                break;
            case 'outline':
                $styleClass = 'border border-gray-500 text-gray-500 hover:bg-gray-200';
                break;
            default:
                $styleClass = '';
        }
    }

    $marginClass = '';
    if ($margin) {
        switch ($margin) {
            case 'small':
                $marginClass = 'mb-2';
                break;
            case 'normal':
                $marginClass = 'mb-4';
                break;
            case 'large':
                $marginClass = 'mb-6';
                break;
            default:
                $marginClass = '';
        }
    }

    $class = 'inline-flex items-center justify-center py-4 px-8 ' . $styleClass . ' ' . $marginClass;

    // Determine the link URL
    $link = get_sub_field('page_url') ?: '#';
    $target = get_sub_field('target') ?: '_self';
@endphp

@hassub('button_label')
    <a class="{{ $class }}" href="{{ $link }}" target="{{$target}}">
        <span>@sub('button_label')</span>
    </a>
@endsub
