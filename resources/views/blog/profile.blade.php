@extends('blog.index')
@section('container')
<section class="bg-gray-100 dark:bg-gray-800">
    <div class="container pt-20 mb-10">
        <div class="mx-auto bg-gray-50 dark:bg-gray-700 rounded-2xl shadow-xl shadow-black p-4">
            <div class="gambar photo-wrapper p-2">
                <img class="w-32 h-32 rounded-full mx-auto" src="img/teguh.jpeg" alt="profl">
            </div>
            <div class="p-2">
                <h3 class="text-center text-xl text-gray-900 dark:text-gray-50 font-medium leading-8">Teguh Budi Laksono</h3>
                <div class="text-center text-gray-500 dark:text-blue-400 text-xs font-semibold">
                    <p>Web Developer</p>
                </div>
                <table class="tabel text-sm my-3">
                    <tbody>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 dark:text-gray-50 font-semibold font-serif">University </td>
                            <td class="px-2 py-2 dark:text-gray-50">: Universitas Muhammadiyah Sidoarjo</td>
                        </tr>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 dark:text-gray-50 font-semibold font-serif">Status </td>
                            <td class="px-2 py-2 dark:text-gray-50">: Mahasiswa</td>
                        </tr>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 dark:text-gray-50 font-semibold font-serif">Email </td>
                            <td class="px-2 py-2 dark:text-gray-50">: budit749@gmail.com</td>
                        </tr>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 dark:text-gray-50 font-semibold font-serif">Bio</td>
                            <td class="px-2 py-2 dark:text-gray-50">: Hanya mahasiswa biasa yang ingin menjadi FullStack Developer
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- About --}}
    <div class="container">
        <div class="row">
            <div class="col mb-5 mx-auto">
                <p class="font-semibold text-2xl text-center dark:text-gray-50" id="guh-tulisan">Tentang Website!</p>
                <p class="font-serif text-lg leading-relaxed dark:text-gray-50" id="tulisan">GuhCoding.com merupakan website sederhana yang menyajikan beragam
                    tutorial
                    dan dibuat menggunakan framework PHP yang sangat popular pada saat ini yaitu Laravel, Saya
                    berharap dengan dibuatnya website ini, teman-teman dapat mendapatkan ilmu yang benar-benar
                    bermanfaat. Karena pada dasarnya, website ini dibuat atas niat saya yang ingin mengedukasi
                    teman-teman sekalian yang ingin belajar coding. Happy & Enjoy Coding ^_^</p>
            </div>
        </div>
    </div>
    @include('blog.layouts.footer')
    {{-- End About --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script>
        gsap.from('.gambar img', {
            duration: 1,
            y: -100,
            opacity: 0,
            ease: 'bounce'
        })

    </script>
</section>
@endsection