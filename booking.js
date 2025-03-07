document.addEventListener("DOMContentLoaded", function () {
    const forms = document.querySelectorAll(".form-section");
    const defaultForm = document.getElementById("bform1"); // Set default form

    function showForm(formId) {
        forms.forEach(form => {
            if (form.id === formId) {
                form.style.display = "block"; // Show selected form
                setTimeout(() => { form.style.opacity = "1"; }, 50); // Quick fade-in effect
            } else {
                form.style.opacity = "0"; // Fade-out effect
                setTimeout(() => { form.style.display = "none"; }, 200); // Match 0.2s transition
            }
        });
    }

    // Ensure the default form is visible at the start
    forms.forEach(form => {
        if (form !== defaultForm) {
            form.style.display = "none";
            form.style.opacity = "0";
        } else {
            form.style.display = "block";
            form.style.opacity = "1";
        }
    });

    document.getElementById("toggle1").addEventListener("click", () => showForm("bform1"));
    document.getElementById("toggle2").addEventListener("click", () => showForm("bform2"));
    document.getElementById("toggle3").addEventListener("click", () => showForm("bform3"));
    document.getElementById("toggle4").addEventListener("click", () => showForm("bform4"));
});

