const show = document.querySelector('.kotak-modal');
const klik = document.querySelector('#tombol-cari');
const tutup = document.querySelector('#tutup-bar');

klik.addEventListener('click', function () {
    show.classList.toggle('hidden');
})

tutup.addEventListener('click', function () {
    show.classList.add('hidden');
})

$(document).ready(function () {
    // animasi kotak modal
    $('#tombol-cari').click(function () {
        $('.kotak-modal').addClass('modalAnimasi')
    })
    $('#tutup-bar').click(function () {
        $('.kotak-modal').removeClass('modalAnimasi')
    })
    // animasi blur
    $('#tombol-cari').click(function () {
        $('.main_section').addClass('modalBlur')
    });
    $('#tutup-bar').click(function () {
        $('.main_section').removeClass('modalBlur')
    })

})
