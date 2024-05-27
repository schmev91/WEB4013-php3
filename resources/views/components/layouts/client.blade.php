<x-layouts.app title="Melodize">
    {{-- theme --}}
    <input
        type="checkbox"
        class="theme-controller hidden"
        value="melodize"
        checked
    />

    <div class="flex min-h-screen flex-col justify-between bg-wall">
        <livewire:client.header />

        <div class="container glass z-10 grow">
            @yield("content")
        </div>

        @once
            <x-client.footer />
        @endonce
    </div>

    @livewire("auth.register")
    @livewire("auth.login")
</x-layouts.app>
