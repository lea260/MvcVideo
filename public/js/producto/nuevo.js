document.addEventListener("DOMContentLoaded", (event) => {
  // Define the loadFile arrow function
  const loadFile = (event) => {
    const fileInput = event.target;
    if (fileInput.files && fileInput.files[0]) {
      const reader = new FileReader();
      reader.onload = (e) => {
        const previewImage = document.getElementById("imgP");
        previewImage.src = e.target.result;
      };
      reader.readAsDataURL(fileInput.files[0]);
    }
  };

  // Get a reference to the file input element
  const fileInput = document.getElementById("fileInput");

  // Attach the loadFile arrow function to the 'change' event
  fileInput.addEventListener("change", loadFile);
});
