@props(['href'])

<a href="{{ $href }}" class="link text-primary link-hover">
    {{ $slot }}
</a>