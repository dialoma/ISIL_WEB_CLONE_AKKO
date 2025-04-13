"use strict"; /*  */

// VARIABLES
let alertCarousel = document.querySelector("#carousel-alert");
let itemsGaleria = document.querySelector("#galeria");
let uri = "https://rickandmortyapi.com/api/character";
/* let productos = [
  {
    id: 0,
    modelo: "MU01 Mountain Seclusion",
    switch: "Akko V3 Piano Pro Switch (Linear)",
    precio: 119.99,
  },
  {
    id: 1,
    modelo: "MU01 Autumn",
    switch: "Linear TTC Demon Switch (with LED condenser)",
    precio: 119.99,
  },
  {
    id: 2,
    modelo: "Gudetama 5108 SE",
    switch: "Linear TTC Demon Switch (With Condenser)",
    precio: 129.99,
  },
  {
    id: 3,
    modelo: "MOD007v3 HE Year of Dragon",
    switch:
      "Disclaimer: the keyboard does NOT support mechanical switches. However, you can purchase the PCBA separately that supports 5-pin mechanical switches.",
    precio: 179.99,
  },
  {
    id: 4,
    modelo: "Horizon 5075B Plus SP",
    switch: "Akko V3 Cream Yellow Pro",
    precio: 89.99,
  },
  {
    id: 5,
    modelo: "Monet’s Pond 5087S QMK",
    switch: "Akko V3 Cream Yellow switches",
    precio: 84.99,
  },
  {
    id: 6,
    modelo: "Mint 5087S SP QMK",
    switch: "Cherry MX Silent Black",
    precio: 79.99,
  },
  {
    id: 7,
    modelo: "MOD 007B PC Shine-Through",
    switch: "Kailh Ice Cream Pink",
    precio: 109.99,
  },
]; */

/* // FOR, GALERIA DINAMICA EP1
for (let i = 0; i < productos.length; i++) {
  itemsGaleria.innerHTML += `

      <li class="col-12 col-md-6 col-lg-3 mb-3">
      <img class="w-50" src="img/teclado${productos[i].id}.jpg" alt="Teclado" />
      <p class="btntmn">${productos[i].modelo}</p>
      <p class="btntmn">$${productos[i].precio}</p>
      </li>

  `;
} */

// ALERT EP1
if (alertCarousel) {
  alertCarousel.addEventListener("click", function () {
    Swal.fire("Subscribe to our newsletter to get exclusive discounts!");
  });
}

// GALERIA DINAMICA USANDO JSON EP 2
let tecladosApi = async () => {
  try {
    let teclados = await fetch("datos/teclados.json");
    let datos = await teclados.json();
    let listado = document.querySelector("#galeria");
    let tecladosDatos = datos.teclados;
    console.log(tecladosDatos.length);
    for (const teclado of tecladosDatos) {
      listado.innerHTML += `<li class="col-12 col-md-6 col-lg-3 mb-3">
      <img class="w-50" src="img/teclado${teclado.id}.jpg" alt="Teclado" />
      <p class="btntmn">${teclado.modelo}</p>
      <p class="btntmn">$${teclado.precio}</p>
      </li>
      `;
    }
  } catch (error) {
    console.log(`Ha ocurrido un error ${error}`);
  }
};

tecladosApi();

// NUESTROS CLIENTES - API CALL EP2
let nuestrosClientes = async () => {
  // bypass;
  try {
    let clientes = await fetch(uri);
    let datos = await clientes.json();
    let row1 = document.querySelector("#row1--fetch");
    let clientesArray = datos.results;

    for (let i = 0; i < 6; i++) {
      row1.innerHTML += `
        <div class="col-12 col-md-4  col-lg-2">
          <div class="card">
            <img src="${clientesArray[i].image}" class="card-img-top" alt="..." />
            <h4 class="pt-3">${clientesArray[i].name}</h4>
            <h7>${clientesArray[i].status}</h7>
            <h6>${clientesArray[i].species}</h6>
          </div>
        </div>`;
    }
  } catch (error) {
    console.log(`Ha ocurrido un error ${error}`);
  }
};

nuestrosClientes();
