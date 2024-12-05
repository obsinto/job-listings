@props(['name'])
@error($name)
<p class="block text-red text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
@enderror
