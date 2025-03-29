
const usuarios = [
    { nombre: "Carlos", edad: 25 },
    { nombre: "Ana", edad: 18 },
    { nombre: "Pedro", edad: 30 },
    { nombre: "Sofía", edad: 22 }
];


function filtrarUsuarios() {
    return usuarios.filter(usuario => usuario.edad >= 21);
}

function obtenerUsuariosFiltrados() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            const usuariosFiltrados = filtrarUsuarios();
            resolve(usuariosFiltrados);
        }, 2000);
    });
}


obtenerUsuariosFiltrados()
    .then(usuariosFiltrados => {
        console.log("Usuarios filtrados mayores o iguales a 21 años:", usuariosFiltrados);
    })
    .catch(error => {
        console.error("Error al obtener los usuarios:", error);
    });
