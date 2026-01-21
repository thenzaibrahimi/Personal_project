document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".food-card").forEach(card => {
    card.addEventListener("click", () => {
      card.classList.toggle("border-primary");
    });
  });
});
