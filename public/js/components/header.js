document.addEventListener("DOMContentLoaded", () => {
  const hamburger = document.getElementById("hamburger");
  const navLinks = document.querySelector(".nav-links");

  if (hamburger && navLinks) {
    hamburger.addEventListener("click", () => {
      navLinks.classList.toggle("active");
    });
  }

  // Handle dropdown di mobile
  const dropdownLinks = document.querySelectorAll(".dropdown > a");

  dropdownLinks.forEach(link => {
    link.addEventListener("click", (e) => {
      if (window.innerWidth <= 844) {
        e.preventDefault(); // cegah langsung pergi ke link
        const parent = link.parentElement;
        parent.classList.toggle("open");

        // opsional: kalau mau close dropdown lain saat satu dibuka
        // document.querySelectorAll(".dropdown").forEach(d => {
        //   if (d !== parent) d.classList.remove("open");
        // });
      }
    });
  });
});
