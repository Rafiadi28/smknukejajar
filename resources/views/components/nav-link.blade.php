@props(['active' => false])

<a {{ $attributes }} class="flex px-4 py-3 text-sm font-medium" :class="{ '{{ $active ? 'bg-white text-black' : 'text-gray-50 hover:bg-gray-700 hover:text-white' }}': !atTop, '{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}': atTop }" aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>