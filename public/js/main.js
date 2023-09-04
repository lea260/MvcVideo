window.addEventListener("DOMContentLoaded", (event) => {
  console.log("DOM fully loaded and parsed");
  //alert("dom listo");
  document.addEventListener("click", (event) => {
    alert("");
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
    console.log("controlador");
    console.log(c);
    console.log("metodo");
    console.log(m);
    console.log("ir");
  });
});
