@props(['active' => false])

<a {{ $attributes }}
   class="{{ $active 
        ? 'text-white font-semibold border-b-2 border-blue-500' 
        : 'text-gray-300 hover:text-white hover:border-b-2 hover:border-blue-400' }} 
        px-3 py-2 text-sm transition">
    {{ $slot }}
</a>
