@extends('dashboard.partial.main')
@section('container')

<form action="{{ url('/gae-kategori/kategori') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-md-8 mt-10">
        <div class="mb-3">
            <label for="name" class="form-label">Name Category</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                value="{{ old('name') }}">
            @error('name')
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
            <label for="image" class="form-label">Upload Image</label>
            <img class="img-preview mb-3 rounded-md img-fluid">
            <input class="form-control @error('imageCategory') is-invalid @enderror" type="file" name="imageCategory" id="image" onchange="imgPriview()">
            @error('imageCategory')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success mb-20 text-slate-700">Buat Category!</button>
    </div>
</div>
</form>
<script>
    const judul = document.querySelector('#name');
    const slug = document.querySelector('#slug');

      judul.addEventListener("change", function() {
            let preslug = judul.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });

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