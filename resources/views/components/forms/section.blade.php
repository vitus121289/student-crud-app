@props(['heading'])
<section
        class="w-full absolute top-1/2 left-1/2 mx-auto max-w-sm -translate-x-1/2 -translate-y-1/2 transform space-y-4 text-center"
    >
    <div class="space-y-4">
        <header class="mb-3 text-2xl font-bold">{{ ucwords($heading) }}</header>
        {{ $slot }}
    </div>
</section>