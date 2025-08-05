@props(['name'])

<div>
    <input 
        {{ $attributes }} 
        name="{{ $name }}" 
        class="input border border-gray-600 bg-transparent focus:outline-none focus:border-primary w-full mb-1"
    />
    @error($name)
        <div class="text-error font-semibold mt-1">{{ $message }}</div>
    @enderror
</div>