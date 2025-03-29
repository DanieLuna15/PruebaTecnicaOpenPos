// Ejercicio 5 - JavaScript (Manejo de Arrays y Promesas)
// Problema: Dado el siguiente array de objetos:
// js
// const usuarios = [
// { nombre: "Carlos", edad: 25 },
// { nombre: "Ana", edad: 18 },
// { nombre: "Pedro", edad: 30 },
// { nombre: "Sofía", edad: 22 }
// ];
// 1. Escribe una función en JavaScript que filtre los usuarios con edad mayor o igual a 21.
// 2. Usa setTimeout para simular una consulta que devuelva el array filtrado después de 2 segundos.

const usuarios = [
    { nombre: "Carlos", edad: 25 },
    { nombre: "Ana", edad: 18 },
    { nombre: "Pedro", edad: 30 },
    { nombre: "Sofía", edad: 22 }
];

function filtrarUsuariosMayoresde21() {
    return usuarios.filter(usuario => usuario.edad >= 21);
}

function obtenerUsuariosFiltrados() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            const usuariosFiltrados = filtrarUsuariosMayoresde21();
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
