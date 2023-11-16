@props([
    'id',
    'name',
    'value' => '',
    'model' => '',
    'rows' => 3,
])
<textarea
    id="{{ $id }}"
    rows="{{ $rows }}"
    {{ $attributes->merge(['class' => 'mt-2 block w-full rounded-md border-0 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 disabled:bg-gray-50 disabled:cursor-not-allowed']) }}
>
    {{ $value }}
</textarea>
