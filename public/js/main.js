window.addEventListener("DOMContentLoaded", (event) => {
  console.log("DOM fully loaded and parsed");
  //alert("dom listo");

  async function peticionGet(con, met) {
    try {
      // Realiza la solicitud utilizando fetch

      //const respuesta = await fetch("URL_DEL_RECURSO");
      let headersList = {};

      let respuesta = await fetch(
        "http://localhost/MvcVideo/index.php?c=html_" + con + "&m=" + met,
        {
          method: "GET",
          headers: headersList,
        }
      );

      const contenidoHTML = await respuesta.text();

      // Verifica si la solicitud fue exitosa (código de estado HTTP 200)
      if (!respuesta.ok) {
        throw new Error(`Error al realizar la solicitud: ${respuesta.status}`);
      }

      // Procesa la respuesta como texto HTML

      // Hacer algo con el contenido HTML obtenido
      console.log(contenidoHTML);
      // Obtén el elemento div con el ID "contenido"
      const divContenido = document.getElementById("contenido");

      // Inserta el contenido HTML en el div
      divContenido.innerHTML = contenidoHTML;
    } catch (error) {
      console.log(error);
      console.error(`Se produjo un error: ${error.message}`);
    }
  }

  document.addEventListener("click", (event) => {
    //alert("");
    const click = event.target;
    //console.log(click);
    let aux = click.classList;
    //console.log(aux);

    if (!aux.contains(".link")) {
      //alert("foo");
      return;
    }
    let c = click.dataset.con;
    let m = click.dataset.met;
    let k = click.dataset.articuloIdCod;
    console.log("controlador");
    console.log(c);
    console.log("metodo");
    console.log(m);
    console.log("---------------");
    console.log(k);
    peticionGet(c, m);
  });
});
