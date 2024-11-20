@props(['active' => false])

<a {{ $attributes }} class="flex px-4 py-3 text-sm font-medium" :class="{'{{ $active ? 'bg-clr-secondary text-clr-black' : 'text-clr-white hover:bg-clr-secondary hover:text-clr-black' }}': !atTop, '{{ $active ? 'bg-clr-primary text-clr-white' : 'text-clr-black hover:bg-clr-primary hover:text-clr-white' }}': atTop}" aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
