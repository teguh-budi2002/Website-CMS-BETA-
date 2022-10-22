const scriptURL =
'https://script.google.com/macros/s/AKfycbxda6omdKJQElIf9FU2VRjnYVwWEBWqa-jhGvPLD-3HXCOmV5ibq32O0HoHENLrip0-/exec'
const form = document.forms['guh-coding-contact']
const btnKirim = document.querySelector('.btn-kirim');
const btnLoading = document.querySelector('.btn-loading');
const alert = document.querySelector('#pesan-alert');
const tutupAlert = document.querySelector('#close');

form.addEventListener('submit', (e) => {
e.preventDefault()
// ketika dikirim
btnLoading.classList.toggle('hidden')
btnKirim.classList.toggle('hidden')

// tutup alert
tutupAlert.addEventListener('click', function () {
    alert.classList.toggle('hidden')
})

fetch(scriptURL, {
        method: 'POST',
        body: new FormData(form)
    })
    .then(response => {
        btnKirim.classList.toggle('hidden')
        btnLoading.classList.toggle('hidden')
        // tampilkan alert
        alert.classList.toggle('hidden')
        // reset form
        form.reset()
    })
    .catch(error => {
        if (error.status === 200) {
            console.log("WANJIR ERROR")
        }
    })
})