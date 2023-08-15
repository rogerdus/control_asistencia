import './bootstrap';
import swal from 'sweetalert2';
import nprogress from 'nprogress'
import * as bootstrap from 'bootstrap'
import '../sass/app.scss'
window.Swal = swal;
window.NProgress = nprogress


const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 1000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});

window.Toast = toast
