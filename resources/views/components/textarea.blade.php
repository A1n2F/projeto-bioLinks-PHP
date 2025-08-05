@props(['value'])

<textarea {{ $attributes }} class="textarea border border-gray-500 w-full bg-transparent focus:border-primary">
    {{ $value }}
</textarea>