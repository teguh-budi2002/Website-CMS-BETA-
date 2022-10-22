@extends('dashboard.partial.main')
@section('container')
<div class="w-full h-full flex justify-center">
    <div class="w-3/4 rounded bg-white p-2 mt-20 mb-10">
        <div class="txt_header text-center mt-3">
            <p class="text-3xl text-gray-500">Editing Category</p>
        </div>
        <form action="{{ url('/gae-kategori/kategori/' . $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mt-3 mb-3 space-y-4">
                <label for="name">Nama Category</label>
                <input type="text" name="name" value="{{ old('name', $category->name) }}" id="name" class="form-input w-full rounded-full">
            </div>
            <div class="form-group mt-3 mb-3 space-y-4">
                <label for="slug">Slug</label>
                <input type="text" name="slug" value="{{ old('slug', $category->slug) }}" id="slug" class="form-input w-full rounded-full">
            </div>
            <div class="form-group">
                <label for="image" class="form-label">Upload Image Category</label>
                @if ($category->imageCategory)
                <img src="{{ asset('storage/public/category-image/' . $category->imageCategory) }}" class="img-preview mb-2 rounded-md img-fluid">
                @else
                <img class="img-preview mb-2 rounded-md img-fluid">
                @endif
                <input class="form-file" type="file"
                    name="imageCategory" id="image" onchange="imgPriview()">
            </div>
            <div class="btn_submit text-center">
                <button class="py-2.5 px-6 rounded bg-blue-500 text-white">Edit Category</button>
            </div>
        </form>
    </div>
</div>
<script>
    const judul = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    judul.addEventListener("change", function () {
        let preslug = judul.value;
        preslug = preslug.replace(/ /g, "-");
        slug.value = preslug.toLowerCase();
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
@endsection
