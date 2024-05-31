<!-- Life is available only in the present moment. - Thich Nhat Hanh -->
@extends("components.layouts.client")

@section("content")
    <script>
        window.showingTrack = @json($track);
    </script>

    <section class="flex gap-10">
        <div class="track-detail flex flex-grow flex-col justify-between gap-3">
            <div class="detail-top flex justify-between">
                <div class="flex gap-2">
                    <button class="btn-circle btn-lg bg-hypergreen p-3">
                        <x-svg.sharp-play class="mx-auto" />
                    </button>
                    <div class="flex flex-col justify-between">
                        <span class="mb-1 bg-wall px-2 text-4xl text-white">
                            {{ $track->title }}
                        </span>
                        <span class="w-fit bg-wall px-2 text-gray-300">
                            {{ $track->artist }}
                        </span>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-2">
                    <p class="text-lg font-medium text-white">
                        {{ $track->created_at }}
                    </p>
                    <span class="badge badge-neutral"># EDM & Dance</span>
                </div>
            </div>
            <div>
                <div id="waveform"></div>
            </div>
        </div>
        <div class="track-image">
            <img
                class="h-96 w-96 object-cover"
                src="{{ Storage::url($track->cover) }}"
                alt=""
            />
        </div>
    </section>

    <section class="mt-5 flex justify-between">
        @include("client.track-show.comments")
        @include("client.track-show.related")
    </section>

    @vite("resources/dist/js/page/track-show.js")
@endsection
