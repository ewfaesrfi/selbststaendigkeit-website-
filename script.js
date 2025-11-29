document.addEventListener("DOMContentLoaded", function () {
    const toggleDark = document.getElementById("toggleDark");

    toggleDark.addEventListener("click", function () {
        document.body.classList.toggle("dark");

        if (document.body.classList.contains("dark")) {
            toggleDark.textContent = "☀️";
        } else {
            toggleDark.textContent = "🌙";
        }
    });
});
