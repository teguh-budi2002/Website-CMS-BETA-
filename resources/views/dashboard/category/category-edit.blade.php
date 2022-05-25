@extends('dashboard.partial.main')

@section('container')
<form method="post" action="{{ url('gae-kategori/kategori/' . $categories->id) }}" enctype="multipart/form-data">
    {{ @method_field('PUT') }}
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-8 mt-4">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="name" class="form-control @error('judul') is-invalid @enderror" id="judul"
                    value="{{ old('judul', $categories->name) }}">
                @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control  @error('slug') is-invalid @enderror" id="slug"
                    value="{{ old('slug', $categories->slug) }}">
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Edit Image</label>
                <input type="hidden" name="oldimage" value={{ $categories->imageCategory }}>
                @if ($categories->imageCategory)
                <img src="{{ asset('storage/' . $categories->imageCategory) }}" class="img-preview mb-2 rounded-md img-fluid">
                @else
                <img class="img-preview mb-2 rounded-md img-fluid">
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" name="imageCategory" id="image" onchange="imgPriview()">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success mb-10 text-slate-700">Edit Postingan!</button>
        </div>
    </div>
</form>
<script>
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