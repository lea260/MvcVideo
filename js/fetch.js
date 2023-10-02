document.addEventListener("DOMContentLoaded", () => {
  const myForm = document.getElementById("myForm");
  const resultDiv = document.getElementById("result");

  myForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    const formData = new FormData(myForm);

    try {
      const response = await fetch("URL_DEL_SERVIDOR", {
        method: "POST",
        body: formData,
      });

      if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
      }

      const data = await response.json();

      // Haz algo con la respuesta JSON
      resultDiv.innerHTML = JSON.stringify(data);
    } catch (error) {
      console.error("Fetch error:", error);
    }
  });
});
