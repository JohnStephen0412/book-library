document.addEventListener("DOMContentLoaded", function() {
  // Hover zoom effect for book covers
  const covers = document.querySelectorAll(".book-card img, .book-image img");
  covers.forEach(img => {
    img.addEventListener("mouseover", () => {
      img.style.transform = "scale(1.05)";
      img.style.transition = "transform 0.3s ease";
    });
    img.addEventListener("mouseout", () => {
      img.style.transform = "scale(1)";
    });
  });

  // Highlight current nav link
  const navLinks = document.querySelectorAll("nav a");
  navLinks.forEach(link => {
    if (link.href === window.location.href) {
      link.style.fontWeight = "bold";
      link.style.textDecoration = "underline";
    }
  });
});