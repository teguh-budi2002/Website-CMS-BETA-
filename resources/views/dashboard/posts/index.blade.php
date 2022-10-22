@extends('dashboard.partial.main')
@section('container')
<div class="w-full h-full">
    <div class="wrapper">
        <div class="flex justify-center mt-28">
            <div class="txt_header">
                <p class="text-4xl font-semibold text-gray-100">Create Post</p>
            </div>
        </div>
        @if ($mess = Session::get('sukses'))
        <div class="alert flex justify-center mt-5 mb-5">
            <div class="w-3/4 p-1 rounded bg-green-300 text-green-700 text-center">
            <p>{{ $mess }}</p>
            </div>
        </div>
        @endif
        <div class="flex justify-center mt-5">
          <div class="btn_create">
            <a href="{{ url('gae-post/buat/postingan/create') }}" class="py-2.5 px-5 rounded bg-blue-500 text-white">Add Post</a>
          </div>
        </div>
        <div class="table_wrapper flex items-center justify-center">
            <div class="w-11/12">
                <div class="overflow-x-auto">
                    <div class="flex items-center justify-center">
                        <div class="w-full lg:w-5/6">
                            <div class="bg-white w-full shadow-md rounded my-6">
                                <table class="w-full table-auto">
                                    <thead>
                                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                            <th class="py-3 px-6 text-left">No</th>
                                            <th class="py-3 px-6 text-left">Image</th>
                                            <th class="py-3 px-6 text-left">Judul</th>
                                            <th class="py-3 px-6 text-center">Category</th>
                                            <th class="py-3 px-6 text-center">Author</th>
                                            <th class="py-3 px-6 text-center">Status</th>
                                            <th class="py-3 px-6 text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-600 text-sm font-light bg-white">
                                        @foreach ($posts as $post)
                                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                                            <td class="py-3 px-6 text-center">
                                                <p>{{ $loop->iteration }}</p>
                                            </td>
                                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <img class="w-16 h-10"
                                                        src="{{ asset('storage/public/post-images/' . $post->image) }}"
                                                        alt="{{ $post->image }}">
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-left">
                                                <div class="flex items-center">
                                                    <span
                                                        class="break-words font-semibold text-gray-500">{{ $post->judul }}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6">
                                                <div class="flex flex-col justify-center space-y-2">
                                                @foreach ($post->categories as $category)
                                                    <div class="py-1 px-6 text-center bg-green-300 text-green-600 rounded-full">
                                                        <span>{{ $category->name }}</span>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </td>
                                            <td class="py-3 px-6">
                                                <div class="flex justify-center items-center">
                                                    <div class="text-red-500">
                                                        <span>{{ $post->author }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-center">
                                                <span
                                                    class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Active</span>
                                            </td>
                                            <td class="py-3 px-6 text-center">
                                                <div class="flex item-center justify-center">
                                                    <div
                                                        class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                                        <a href="{{ "https://guhcoding.com/post/" . $post->slug }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                      </a>
                                                    </div>
                                                    <div
                                                        class="w-4 mr-2 transform hover:text-violet-500 hover:scale-110">
                                                        <a
                                                            href="{{ url('/gae-post/buat/postingan/'. $post->slug . '/edit') }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                                        <form
                                                            action="{{ url('/gae-post/buat/postingan/'. $post->slug) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" class="w-4 h-4" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="1.5"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination flex justify-center mb-8">
          {{ $posts->links('vendor.pagination.simple-tailwind') }}
        </div>
    </div>
</div>
@endsection
