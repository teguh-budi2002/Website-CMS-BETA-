@extends('dashboard.partial.main')

@section('container')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>


<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-ko-KR.min.js"></script>
<div class="mt-4">
    <form method="post" action="{{ url('gae-post/buat/postingan') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul"
                        value="{{ old('judul') }}">
                    @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control  @error('slug') is-invalid @enderror" id="slug"
                        value="{{ old('slug') }}">
                    @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" name="author" class="form-control  @error('author') is-invalid @enderror"
                        id="author" value="{{ old('author') }}">
                    @error('author')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="excerpt" class="form-label">Excerpt</label>
                    <input type="text" name="excerpt" class="form-control  @error('excerpt') is-invalid @enderror"
                        id="excerpt" value="{{ old('excerpt') }}">
                    @error('excerpt')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                @if ($categories->count())
                <div class="mt-3 mb-3">
                    <label for="category" class="mb-2">Category</label>
                    <select class="form-select" id="categor" name="category_id">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? ' selected' : ' ' }}>
                            {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                @else
                <div class="mb-3">
                    <label for="category" class="form-label">category</label>
                    <input type="text" name="category_id" class="form-control  @error('category') is-invalid @enderror"
                        id="category" value="{{ old('category') }}">
                    @error('category')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                @endif
                <div class="mb-3">
                    <textarea class="form-control" id="summernote" name="body">{{ old('body') }}</textarea>
                </div>

                <button type="submit" class="btn btn-success mb-20 text-slate-700">Buat Postingan!</button>
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            tabsize: 2,
            height: 400
        });
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
    // judul.addEventListener("change", function() {
    //         let preslug = judul.value;
    //         preslug = preslug.replace(/ /g,"-");
    //         slug.value = preslug.toLowerCase();
    //     });

</script>
@endsection
