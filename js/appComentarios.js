"use strict";

document.addEventListener("DOMContentLoaded", () => {
    const API_URL = "api/comentarios";


    let app = new Vue({
        el: "#app",
        data: {
            comentarios: [],
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
        // fetch para traer todos los comentarios
        let url = document.querySelector("#dataZapatilla").dataset.id_zapatilla;
        try {
            let response = await fetch(API_URL + "/zapatillas/" + url);
            let comentariosAPI = await response.json();
            app.comentarios = comentariosAPI;
        } catch (e) {
            console.log(e);
        }
        try {
            let response = await fetch(API_URL);
            let comentarios = await response.json();
            commList.comentarios = comentarios;
          } catch (e) {
            console.log(e);
          }
    }


    async function agregarComentario(e) {
        e.preventDefault();

        let puntuacion = document.querySelector('#puntuacion').value;
        let comentario = document.querySelector("#comentario").value;
        let idZapatilla = document.querySelector("#dataZapatilla").dataset.id_zapatilla;

        if (comentario == "" || puntuacion === null) {
            alert("El comentario no puede estar vacio");
        } else {
            let nuevoComentario = {
                descripcion: comentario,
                puntuacion: puntuacion,
                id_zapatilla: idZapatilla,
            };
            try {

                let res = await fetch(API_URL + "/zapatillas/" + idZapatilla, {
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
        let id = e.target.dataset.id_comentario;
        try {
            let response = await fetch(API_URL + "/deleteComment/" + id, {
                method: "DELETE",
            });
            console.log(response);
            getComentarios();
        } catch (e) {
            console.log(e);
        }
    }

    let enviarComentario = document.querySelector("#enviarComentario");

    enviarComentario.addEventListener("click", agregarComentario);

    getComentarios();



});
