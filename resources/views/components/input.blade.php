@props(['name', 'prefix' => null])

<label class="input border border-gray-600 bg-transparent focus:outline-none focus:border-primary w-full mb-1">
    @if($prefix)
        <span>{{ $prefix }}</span>
    @endif


    <input {{ $attributes }} name="{{ $name }}" class="grow" />
    @error($name)
        <div class="text-error font-semibold mt-1">{{ $message }}</div>
    @enderror
</label>