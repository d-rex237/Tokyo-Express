document.addEventListener("DOMContentLoaded", function () {
    function showForm(formId) {
        document.querySelectorAll(".form-section").forEach(form => {
            form.style.display = "none";
        });
        document.getElementById(formId).style.display = "block";
    }

    document.getElementById("toggle1").addEventListener("click", () => showForm("bform1"));
    document.getElementById("toggle2").addEventListener("click", () => showForm("bform2"));
    document.getElementById("toggle3").addEventListener("click", () => showForm("bform3"));
    document.getElementById("toggle4").addEventListener("click", () => showForm("bform4"));
});
