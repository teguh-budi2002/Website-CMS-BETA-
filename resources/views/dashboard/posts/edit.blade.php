@extends('dashboard.partial.main')

@section('container')
@push('head-stack')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-ko-KR.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    /* For summernote override unordered and order list */
    .note-editable ul {
        list-style: disc !important;
        margin: 10px;
        list-style-position: inside !important;
    }

    .note-editable ol {
        list-style: decimal !important;
        margin: 10px;
        list-style-position: inside !important;
    }

</style>
@endpush
<div class="w-full h-full">
    <div class="flex justify-center">
        <div class="w-3/4 rounded bg-white p-2 mt-20 mb-10">
            <div class="mt-2">
                <form method="post" action="{{ url('gae-post/buat/postingan/' . $post->slug) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group space-y-2">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" value="{{ old('judul', $post->judul) }}" id="judul"
                            class="form-input p-1 w-full rounded-md">
                    </div>
                    <div class="form-group space-y-2">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" value="{{ old('slug', $post->slug) }}" id="slug"
                            class="form-input p-1 w-full rounded-md">
                    </div>
                    <div class="form-group space-y-2">
                        <label for="excerpt">Excerpt</label>
                        <input type="text" name="excerpt" value="{{ old('excerpt', $post->excerpt) }}" id="excerpt"
                            class="form-input p-1 w-full rounded-md">
                    </div>
                    <div class="form-group space-y-2">
                        <label for="author">Author</label>
                        <input type="text" name="author" value="{{ old('author', $post->author) }}" id="author"
                            class="form-input p-1 w-full rounded-md">
                    </div>
                    <div class="form-group mt-3 mb-3 space-x-3">
                        <label for="category" class="mb-2">Category</label>
                        <select class="form-select w-96 js-example-basic-multiple" id="category" name="category_id[]" multiple="multiple">
                            @foreach($categories as $category)
                            @if (old('category_id'))
                            <option value="{{ $category->id }}" {{ in_array($category->id, old('category_id')) ? 'selected' : '' }}>{{ $category->name }}</option>
                            @else
                            <option value="{{ $category->id }}" {{ $post->categories->contains($category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group space-y-2">
                        <label for="image">Image</label>
                        <input type="hidden" name="oldimage" value={{  $post->image }}>
                        @if ($post->image)
                        <img src="{{ asset('storage/public/post-images/' . $post->image) }}"
                            class="img-preview mb-2 rounded-md img-fluid">
                        @else
                        <img class="img-preview mb-2 rounded-md img-fluid">
                        @endif
                        <input type="file" name="image" id="image" onchange="imgPriview()">
                    </div>
                    <div class="form-group space-y-2">
                        <label for="summernote">Description</label>
                        <textarea class="form-control form-input p-1 w-full rounded-md" id="summernote"
                            name="body">{{ old('body', $post->body) }}</textarea>
                    </div>
                    <div class="btn_group text-center">
                        <button type="submit" class="py-2.5 px-6 rounded-md bg-blue-500 text-white">Edit Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('body-stack')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            tabsize: 2,
            height: 400,
        });
        $('.js-example-basic-multiple').select2();
    });

</script>
<script>
    const judul = document.querySelector('#judul');
    const slug = document.querySelector('#slug');

    judul.addEventListener('change', () => {
        fetch('/gae-post/buat/postingan/checkSlug?judul=' + judul.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    function imgPriview() {
        const image = document.querySelector('#image');
        const imagePreview = document.querySelector('.img-preview');

        imagePreview.style.display = "block";

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREevent) {
            imagePreview.src = oFREevent.target.result;
        }
    }

</script>
@endpush
@endsection
