
var asistencias = []
url = appiUrl
const empleadoContainer = document.querySelector("#empleado_container");
const messageContainer = document.querySelector("#message_container");

document.addEventListener("DOMContentLoaded", () => {

    const barcode_source = document.querySelector("#barcode")
    barcode_source.value = ''
    barcode_source.addEventListener("keydown", evento => {
        NProgress.start()
        if (evento.keyCode === 13) {
            let clvServidor = barcode_source.value
            const empleado = {
                numero_empleado: clvServidor
            }

            guardarAsistencia(empleado)
                .then(({data}) => {
                    empleadoContainer.textContent = "Numero Empleado: "+data.numeroEmpleado
                    messageContainer.textContent = 'Registro: '+ data.fechaRegistro
                    console.log(data);
                    Toast.fire({
                        icon: 'success',
                        title: 'Registro Correctamente!'
                    });
                    NProgress.done(true);
                })
            barcode_source.value = ''
            barcode_source.focus()
        }
    })
});


async function guardarAsistencia(empleado) {

    const response = await fetch(`${url}asistencia`, {
        method: 'post',
        mode: "same-origin",
        credentials: "same-origin",
        body: JSON.stringify(empleado),
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        }
    });
    return response.json();

}
