@extends('blog.index')
@section('container')
<section class="bg-gray-100 dark:bg-gray-800 w-full h-full">
    <div class="flex justify-center">
        <div class="w-10/12 mt-20 bg-white/100 dark:bg-gray-700 rounded-2xl shadow-md shadow-gray-400 p-4">
            <div class="gambar photo-wrapper p-2">
                <img class="w-32 h-32 rounded-full mx-auto" src="img/teguh.jpeg" alt="profl">
            </div>
            <div class="p-2">
                <h3 class="text-center text-xl text-gray-900 dark:text-gray-50 font-medium leading-8">Teguh Budi Laksono
                </h3>
                <div class="text-center text-gray-500 dark:text-blue-400 text-xs font-semibold">
                    <p>Web Developer</p>
                </div>
                <table class="tabel text-sm my-3">
                    <tbody>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 dark:text-gray-50 font-semibold font-serif">University
                            </td>
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
                            <td class="px-2 py-2 dark:text-gray-50">: Hanya mahasiswa biasa yang ingin menjadi Fullstack
                                Developer
                            </td>
                        </tr>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 dark:text-gray-50 font-semibold font-serif">Skills</td>
                            <td class="px-2 py-2 dark:text-gray-50">: Laravel 8, Vue 3, Tailwind, CSS, PHP, JavaScript, Rest API</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="txt-description mx-16 mt-8 mb-8 space-y-4">
            <p class="font-semibold text-2xl text-center dark:text-gray-50">GuhCoding.com</p>
            <p class="text-lg leading-relaxed dark:text-gray-50 md:text-left text-center">GuhCoding.com merupakan website sederhana yang menyajikan beragam
                tutorial
                dan dibuat menggunakan framework PHP yang sangat popular pada saat ini yaitu Laravel, Saya
                berharap dengan dibuatnya website ini, teman-teman dapat mendapatkan ilmu yang benar-benar
                bermanfaat. Karena pada dasarnya, website ini dibuat atas niat saya yang ingin mengedukasi
                teman-teman sekalian yang ingin belajar coding. Happy & Enjoy Coding ^_^</p>
        </div>
    </div>
</section>
@endsection
