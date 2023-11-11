document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".user-form");
  const progressBar = document.getElementById("progress");
  const registerButton = document.getElementById("registerButton");
  const inputFields = form.querySelectorAll("input[required]");

  inputFields.forEach(function (field) {
    field.addEventListener("input", updateProgressBar);
  });

  window.closeMessageModal = function () {
    $("#messageModal").hide();
  };

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    submitForm();
  });

  function updateProgressBar() {
    let completedFields = 0;

    inputFields.forEach(function (field) {
      if (field.value.trim() !== "") {
        completedFields++;
      }
    });

    const progressPercentage = (completedFields / inputFields.length) * 100;
    progressBar.style.width = progressPercentage + "%";

    if (progressPercentage < 100) {
      registerButton.style.display = "none";
    } else {
      registerButton.style.display = "block";
    }
  }

  function submitForm() {
    fetch(form.action, {
      method: form.method,
      body: new FormData(form),
    })
      .then((response) => response.json())
      .then((data) => {
        console.log(data);

        showMessage(data.message);

        if (data.success) {
          progressBar.style.width = "0";
          registerButton.style.display = "none";
        }
      })
      .catch((error) => {
        console.error("Erro ao enviar o formulário:", error);
      });
  }

  function showMessage(message) {
    $("#messageText").text(message);
    $("#messageModal").show();
  }
});
