@extends('dashboard.partial.main')

@section('container')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>


<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-ko-KR.min.js"></script>

{{-- select2 --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    /* For summernote override unordered and order list */
.note-editable ul{
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
<div class="mt-4">
    <form method="post" action="{{ url('gae-post/buat/postingan') }}" enctype="multipart/form-data">
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
                    <input type="text" name="excerpt" class="form-control @error('excerpt') is-invalid @enderror"
                        id="excerpt" value="{{ old('excerpt') }}">
                    @error('excerpt')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mt-3 mb-3">
                    <label for="category" class="mb-2">Category</label>
                    <select class="form-select js-example-basic-multiple" id="category"
                    name="category_id">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id') == $category->name ? ' selected' : ' ' }}>
                            {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <img class="img-preview mb-2 rounded-md img-fluid">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" onchange="imgPriview()">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <textarea class="form-control  @error('body') is-invalid @enderror" id="summernote" name="body">{{ old('body') }}</textarea>
                    @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success mb-20 text-slate-700">Buat Postingan!</button>
            </div>
        </div>
    </form>
</div>
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
    // judul.addEventListener("change", function() {
    //         let preslug = judul.value;
    //         preslug = preslug.replace(/ /g,"-");
    //         slug.value = preslug.toLowerCase();
    //     });
    function imgPriview(){
            const image = document.querySelector('#image');
            const imagePreview = document.querySelector('.img-preview');

            imagePreview.style.display = "block";

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREevent) {
            imagePreview.src = oFREevent.target.result;
            }
        }

</script>
@endsection
