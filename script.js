const body = document.body;
const toggle = document.getElementById("modeToggle");

toggle.addEventListener("click", () => {
  body.classList.toggle("light");
  body.classList.toggle("dark");
});
