@extends('dashboard.partial.main')
@section('container')
<style>
    .tag {
        background: #ffff;
        position: relative;
        border-bottom: 10px solid #ffff;
        border-top: 10px solid #ffff;
        padding-right: 20px;
        padding-left: 20px;
        color: rgb(69, 77, 85);
        -webkit-transition: 0.4s;
    }

    .tag::after {
        content: '';
        width: 10px;
        height: 20px;
        position: absolute;
        right: -45px;
        top: -9px;
        border-bottom: solid 40px #ffff;
        border-left: solid 30px transparent;
        border-right: solid 30px transparent;
        transform: rotate(90deg);
    }

    .tag:hover {
        background: crimson;
        border-color: crimson;
        color: white;
    }

    .tag:hover::after {
        border-bottom: solid 40px crimson;
        border-left: solid 30px transparent;
        border-right: solid 30px transparent;
    }

</style>
<div class="w-full h-full">
    <div class="container mt-28 mx-auto">
        <div class="flex justify-center">
            <div class="category_list w-3/4 p-2 bg-gray-300 pb-3 rounded-md border-2 border-gray-700 mb-10">
                @if ($mess = Session::get('sukses'))
                <div class="alert w-full bg-green-300 text-green-600 rounded p-2 text-center">
                    <p>{{ $mess }}</p>
                </div>
                @endif
                <div class="txt_header mt-2 mb-5 text-center">
                    <p class="text-3xl text-gray-700">List Category</p>
                </div>
                <div class="btn_create text-center mb-5">
                    <a href="{{ url('/gae-kategori/kategori/create') }}"
                        class="py-2.5 px-6 rounded bg-blue-500 text-white">Add Category</a>
                </div>
                <div class="wrapper_tags flex justify-center">
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-auto text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6 text-center">
                                        Name Category
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Image
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="py-4 px-6 space-y-12">
                                        <div class="tags text-center w-48">
                                            <a href="" class="tag block">{{ $category->name }}</a>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <img src="{{ asset('storage/public/category-image/' . $category->imageCategory) }}"
                                            alt="image category" class="w-10 h-10">
                                    </td>
                                    <td class="py-4 px-6 space-x-4">
                                        <a href="{{ url('/gae-kategori/kategori/'. $category->id .'/edit') }}"
                                            class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Edit</a>
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                                        <button type="button" data-modal-toggle="delete-category{{ $category->id }}"
                                            href="#"
                                            class="font-medium text-red-600 dark:text-red-500 hover:underline ">Delete</button>
                                    </td>
                                </tr>
                                <div id="delete-category{{ $category->id }}" tabindex="-1"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center"
                                    aria-hidden="true">
                                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button"
                                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                data-modal-toggle="delete-category{{ $category->id }}">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-6 text-center">
                                                <svg aria-hidden="true"
                                                    class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                    Are you sure you want to delete
                                                    this category?</h3>
                                                <form action="/gae-kategori/kategori/{{ $category->id }}" method="POST"
                                                    class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        data-modal-toggle="delete-category{{ $category->id }}"
                                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Yes, I'm sure
                                                    </button>
                                                </form>
                                                <button data-modal-toggle="delete-category{{ $category->id }}"
                                                    type="button"
                                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                                    cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
