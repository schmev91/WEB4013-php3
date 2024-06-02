<!-- No surplus words or unnecessary actions. - Marcus Aurelius -->

@props([
    "id" => "",
    "method" => "",
])
<dialog id="{{ $id }}" class="modal">
    <div class="modal-box">
        <form method="dialog" method="post">
            @csrf
            <button
                class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2"
            >
                ✕
            </button>
        </form>

        <form
            wire:submit="submitForm"
            id="login_form"
            class="modal-content flex flex-col gap-3 py-4"
        >
            <div class="prose mb-5">
                <h1 class="prose-h3:">
                    {{ $title ?? "Modal Title" }}
                </h1>
            </div>

            {{ $slot }}

            <div class="form-btns flex justify-end gap-3">
                <span class="btn btn-neutral" onclick="login_modal.close()">
                    Close
                </span>
                <button
                    class="btn btn-neutral border-hypergreen bg-hypergreen text-white"
                    type="submit"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>

    {{-- overlay-close_btn --}}
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
