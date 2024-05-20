<x-layouts.app title="Melodize">
    <div class="flex flex-col justify-between gap-6 bg-client">
        <x-client.header />

        <div class="container min-h-screen">
            {{ $slot }}
        </div>

        @once
            <x-client.footer />
        @endonce
    </div>
</x-layouts.app>
