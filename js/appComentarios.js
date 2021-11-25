"use strict";

document.addEventListener("DOMContentLoaded", () => {
    const API_URL = "api/comentarios/zapatillas/";

    let idZapatilla = document.querySelector("#dataZapatilla").dataset.id_zapatilla;
    let user_rol = document.querySelector("#dataZapatilla").dataset.rol;
    let id_user = document.querySelector("#dataZapatilla").dataset.id_usuario;
    
    
    let app = new Vue({
        el: "#app",
        data: {
            comentarios: [],
            rol: user_rol,
            id_usuario : id_user,
        },
    });

    let listaComentarios = document.querySelector("#lista-comentarios");

    const addEvent = function(mutations, observer) {
        let botonesEliminar = document.querySelectorAll("#eliminarComentario");
        botonesEliminar.forEach((boton) => {
            boton.addEventListener("click", eliminarComentario);
        });
    };

    const observer = new MutationObserver(addEvent);

    observer.observe(listaComentarios, { childList: true });

    async function getComentarios() {
        
        try {
            let response = await fetch(API_URL+ idZapatilla);
            let comentariosAPI = await response.json();
            app.comentarios = comentariosAPI;
        } catch (e) {
            console.log(e);
        }
    }


    async function agregarComentario(e) {
        e.preventDefault();

        let puntuacion = document.querySelector('#puntuacion').value;
        let comentario = document.querySelector("#comentario").value;

        if (comentario == "" || puntuacion === null) {
            alert("El comentario no puede estar vacio");
        } else {
            let nuevoComentario = {
                descripcion: comentario,
                puntuacion: puntuacion,
                id_zapatilla: idZapatilla,
                id_user: id_user,
            };
            try {

                let res = await fetch(API_URL+ idZapatilla, {
                    method: "POST",
                    headers: { "Content-type": "application/json" },
                    body: JSON.stringify(nuevoComentario),
                });
                if (res.ok) {
                    console.log(res);
                    getComentarios();
                }

                
            } catch (error) {
                console.log(error);
            }
        }
    }

    async function eliminarComentario(e) {
        if (app.rol=1) {
           let id = e.target.dataset.id_comentario;
        try {
            let response = await fetch(API_URL + id, {
                method: "DELETE",
            });
            console.log(response);
            getComentarios();
        } catch (e) {
            console.log(e);
        } 
        }
        
    }

    let enviarComentario = document.querySelector("#enviarComentario");

    enviarComentario.addEventListener("click", agregarComentario);

    getComentarios();



});
