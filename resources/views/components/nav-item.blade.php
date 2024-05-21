<!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->

@props([
    "name" => "",
    "active" => null,
])
<a
    href="{{ route($name) }}"
    wire:navigate
    @class([
        "flex h-full items-center border-x border-wall border-opacity-50 p-2 px-8",
        "hover:text-white",
        "bg-wall bg-opacity-50 text-white" => $active,
    ])
>
    {{ $slot }}
</a>
