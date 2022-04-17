@extends('dashboard.partial.main')

@section('container')
<div class="container bg-gray-200 p-4 mt-10 container-postingan dark:bg-slate-800">
    <article class="article mt-2 bg-gray-50 shadow-xl dark:bg-gray-50 unreset">
        <a class="btn btn-info mb-2" href="{{ url('/gae-post/buat/postingan') }}">Back to all post!</a>
        <div class="p-3 dark:text-gray-800 font-sans leading-relaxed">
            @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="konten-image">
            @else
            <img src="https://source.unsplash.com/1200x400?" alt="konten-image">
            @endif
            <p class="text-4xl font-semibold mt-2 mb-2 text-start">{{ $post->judul }}</p>
            <p class="">
                {!! $post->body !!}
            </p>
        </div>
        <hr class="mt-10 mb-10">
        {{-- profile card --}}
        <div class="bg-gray-50 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mb-3"
            id="profile-card">
            <div class=" rounded-lg p-6">
                <div class="flex items-center space-x-6 mb-4">
                    <img class="h-28 w-28 ml-2 object-cover object-center rounded-full"
                        src="{{ asset('img/teguh.jpeg') }}" alt="photo">
                    <div>
                        <p class="text-xl text-slate-900 dark:text-gray-50 font-normal mb-1">{{ $post->author }}</p>
                        <p class="text-xs text-blue-600 dark:text-blue-400 font-normal">Web Developer</p>
                    </div>
                </div>
                <div>
                    <p class="text-gray-800 dark:text-gray-50 leading-loose font-normal text-base">Lorem ipsum dolor sit amet,
                        consectetur
                    </p>
                </div>
            </div>
        </div>
    </article>
</div>
<script>
    $(document).ready(function () {
        $('.code-box-copy').codeBoxCopy({
            tooltipText: 'Copied',
            tooltipShowTime: 1000,
            tooltipFadeInTime: 300,
            tooltipFadeOutTime: 300
        });
    });
</script>
@endsection