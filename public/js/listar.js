window.addEventListener("DOMContentLoaded", (event) => {
  console.log("DOM fully loaded and parsed");
  //alert("dom listo");
  document.addEventListener("click", (event) => {
    const click = event.target;
    console.log(click);
  });
});
