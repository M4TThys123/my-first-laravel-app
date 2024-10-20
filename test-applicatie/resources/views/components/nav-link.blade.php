@props(['active' => false, 'type' => 'anchor'])


@if($type === 'button') 
    <button class="bg-gray-400 text-white hover:bg-gray-700 hover:text-white rounded-md  px-3 py-2 text-sm font-medium"
        {{ $attributes }}>
        {{$slot}}
    </button>
@else 
    <a  class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} text-white rounded-md  px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
            {{$slot}}
    </a>
@endif

