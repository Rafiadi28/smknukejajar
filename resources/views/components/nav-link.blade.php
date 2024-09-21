@props(['active' => false])
<a  {{ $attributes }}
class="{{ $active ? 'bg-green-600  text-black' : 'text-white hover:bg-green-600 hover:text-black' }}
    block px-5 py-2 text-base font-medium" aria-current="{{ $active ? 'page' : false}}"> {{ $slot }}</a>
