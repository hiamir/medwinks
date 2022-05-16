@props(['id','size'])
<input type="checkbox" id="{{$id}}" value="{{$id}}" class="sr-only peer" {{$attributes}}>
<div
    @switch($size)
        @case('small')
{{ $attributes->merge(['class' => "w-8 h-4 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300
            dark:peer-focus:ring-blue-800 dark:bg-gray-600 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-['']
            after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4
            after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"]) }}>
        @break

    @case('large')
    {{ $attributes->merge(['class' => "w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800
dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px]
after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"]) }}>
    @break

    @endswitch

</div>
