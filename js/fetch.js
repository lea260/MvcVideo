document.addEventListener("DOMContentLoaded", () => {
  const myForm = document.getElementById("myForm");
  const resultDiv = document.getElementById("result");
  const urlBase = "http://localhost/MvcVideo/index.php";
  const dataTable = document
    .getElementById("dataTable")
    .getElementsByTagName("tbody")[0];

  myForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    const formData = new FormData(myForm);

    //console.log(formData);
    try {
      let url = urlBase + "?c=php_Producto&m=listar";
      const response = await fetch(url, {
        method: "POST",
        body: formData,
      });
      //console.log(response);
      if (!response.ok) {
        console.log("entro error");
        throw new Error(`HTTP error! Status: ${response.status}`);
      }

      let data = await response.json();
      //console.log("data");
      console.log(data);
      //genero la tabla
      dataTable.innerHTML = "";
      data.lista.forEach((item) => {
        const row = dataTable.insertRow();
        const idCell = row.insertCell(0);
        const codigoCell = row.insertCell(1);
        const descripcionCell = row.insertCell(2);

        idCell.textContent = item.id;
        codigoCell.textContent = item.codigo;
        descripcionCell.textContent = item.descripcion;
      });
      // Haz algo con la respuesta JSON
      //resultDiv.innerHTML = JSON.stringify(data);
    } catch (error) {
      console.error("Fetch error:", error);
    }
  });
});
