// OBTENER ELEMENTOS DEL DOM
// MEDIANTE SU ID
const titulo1 = document.getElementById("titulo");
console.log(titulo1);

let parrafo1 = document.getElementById('parrafo1');
console.log(parrafo1);

// con selectores
//muestra solo el primero enlace de todos los que existan.
let enlace = document.querySelector('a');
console.log(enlace);

let formulario = document.querySelector('form')
console.log(formulario);

let botonEnviar = document.querySelector('#botonEnviar')
console.log(botonEnviar);

//seleccionar un elemento por medio de su clase

let parrafo4 = document.querySelector('.formulario');
console.log(parrafo4);

// muestra todos los enlaces que existan.
let enlaces = document.querySelectorAll('a')
console.log(enlaces);


//otras maneras de mostrar un elemento mas detalladamente.
let enlaceFB = document.querySelector('a[href*="facebook"]')

let enlacesSeguros = document.querySelectorAll('a[href^="https"]')

console.log(enlaceFB)
console.log(enlacesSeguros)

//si el elemento no existe muestra null
let elemento = document.querySelector('noExiste');
console.log(elemento);

//Operaciones con colecciones
// Childnodes
// Devuelve una colección de hijos nodos del elemento dado donde el primer nodo hijo es asignado un índice 0.
// Children
// Retorna una HTMLCollection "viva" de los elementos hijos de un nodo.

let cajaTexto = document.getElementById('cajaTexto');

// HIJOS DEL ELEMENTO
console.log(cajaTexto.childNodes);
console.log(cajaTexto.children[2].innerText = 'cambio realizado al parrafo desde Js');


// getAttribute()
// Devuelve el valor del atributo especificado en el elemento. Si el atributo especificado no existe, el valor retornado
// puede ser tanto null como "" (una cadena vacía);
// setAtrribute()
// Establece el valor de un atributo en el elemento indicado.

console.log(enlace.getAttribute('href'));

//ahora el segundo enlace redigira a google.
let enlace2 = document.querySelector('#enlace2');
enlace2.setAttribute('href', 'https://www.google.com');


//para agregar un clase a un elemento
const element1 = document.getElementById("parrafo3");
element1.classList.add("text-success");

//para elminiar una clase a un elemento
const element2 = document.getElementById("parrafo1");
element2.classList.remove("text-primary");

//para alternar un clase a un elemento se agrega si no está presente, y se elimina si ya está presente.
const element3 = document.querySelector("h1");
element3.classList.toggle("text-success");

//para reemplazar una clase
let element4 = document.querySelector("h1");
element4.classList.replace("text-success", "text-primary");

//mostrar contenido con textContent, innerText, innerHTML y outerHTML.

const titulo2 = document.getElementById("titulo");
const tituloActual = titulo2.textContent;
console.log("Texto del título:", tituloActual);

let mostrar = document.getElementById('parrafo1');

console.log(mostrar.textContent);
console.log(mostrar.innerText);
console.log(mostrar.innerHTML);
console.log(mostrar.outerHTML);

//Creacion de nuevos elementos con documet.createElement();
const parrafoNuevo = document.createElement('p')

parrafoNuevo.textContent = "parrafo creado desde JS"
parrafoNuevo.classList.add('text-info', 'fw-bold')

cajaTexto.appendChild(parrafoNuevo)

//se mostrara el primer elemento hijo de la cajaTexto
console.log(cajaTexto.firstChild)
console.log(cajaTexto.firstElementChild)
//Se mostrara el ultimo elemento hijo de la cajaTexto.
console.log(cajaTexto.lastChild)
console.log(cajaTexto.lastElementChild)
//
console.log(cajaTexto.nextElementSibling)
console.log(cajaTexto.nextSibling)
//
console.log(cajaTexto.previousElementSibling.previousElementSibling)
//se mostrara el elemento padre de la consola
console.log(cajaTexto.parentElement)

