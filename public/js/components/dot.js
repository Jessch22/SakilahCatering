document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".card-hover-wrapper").forEach(wrapper => {
    const container = wrapper.querySelector(".card-hover-container");
    const dotsContainer = wrapper.querySelector(".scroll-dots");
    const cards = container.querySelectorAll(".card-hover");

    // generate dots
    cards.forEach((_, i) => {
      const dot = document.createElement("span");
      if (i === 0) dot.classList.add("active");
      dot.addEventListener("click", () => {
        container.scrollTo({
          left: cards[i].offsetLeft,
          behavior: "smooth"
        });
      });
      dotsContainer.appendChild(dot);
    });

    const dots = dotsContainer.querySelectorAll("span");

    container.addEventListener("scroll", () => {
      let index = Math.round(container.scrollLeft / cards[0].offsetWidth);
      dots.forEach(d => d.classList.remove("active"));
      if (dots[index]) dots[index].classList.add("active");
    });
  });
});