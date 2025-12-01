const body = document.body;
const toggle = document.getElementById("modeToggle");

toggle.addEventListener("click", () => {
  body.classList.toggle("light");
  body.classList.toggle("dark");
});

function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}
