<div class="w-full rounded-2xl bg-gray-50 px-4 ring-2 ring-gray-200 focus-within:ring-blue-400 my-4">
    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="{{ ucwords(str_replace('_', ' ', $name)) }}"
        class="my-3 w-full border-none bg-transparent outline-none focus:outline-none text-gray-400"
        {{ $attributes }}
    >{{ $slot }}</textarea>
</div>