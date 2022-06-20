

window.addEventListener("scroll", () => {
  const sections = document.querySelectorAll("section");
  const navLi = document.querySelectorAll(".exhibit-chapters .exhibit-chapters-list li");
  let current = "";
  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    if (scrollY >= sectionTop - 60) {
      current = section.getAttribute("id");
    }
  });

  navLi.forEach((li) => {
    li.classList.remove("active");
    if (li.classList.contains(current)) {
      li.classList.add("active");
    }
  });
});