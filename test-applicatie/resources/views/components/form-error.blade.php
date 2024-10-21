@props(['name'])

@error($name)
    <p class="font-semibold mt-1 text-red-500 italic text-sm">{{ $message }}</p>
@enderror