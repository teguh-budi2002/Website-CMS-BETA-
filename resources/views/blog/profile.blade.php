<section class="bg-gray-100">
        @include('layouts.nav')
            <div class="container">
                <div class="mx-auto bg-white rounded-2xl shadow-2xl shadow-black p-4 mt-20 mb-20">
                    <div class="gambar photo-wrapper p-2">
                        <img class="w-32 h-32 rounded-full mx-auto" src="img/teguh.jpeg" alt="profl">
                    </div>
                    <div class="p-2">
                        <h3 class="text-center text-xl text-gray-900 font-medium leading-8">Teguh Budi Laksono</h3>
                        <div class="text-center text-gray-500 text-xs font-semibold">
                            <p>Web Developer</p>
                        </div>
                        <table class="tabel text-sm my-3">
                            <tbody>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold font-serif">University </td>
                                    <td class="px-2 py-2">: Universitas Muhammadiyah Sidoarjo</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold font-serif">Status </td>
                                    <td class="px-2 py-2">: Mahasiswa</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold font-serif">Email </td>
                                    <td class="px-2 py-2">: budit749@gmail.com</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold font-serif">Bio</td>
                                    <td class="px-2 py-2">: Hanya mahasiswa biasa yang ingin menjadi FullStack Developer
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script>
            gsap.from('.gambar img', {
                duration: 1,
                y: -100,
                opacity: 0,
                ease: 'bounce'
            })
            // gsap.from('.tabel tbody', {
            //     duration: 1,
            //     y: -40,
            //     opacity: 0,
            //     ease: 'none'
            // })

        </script>
        @include('layouts.footer')
</section>
