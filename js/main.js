// ============ BACK TO TOP BUTTON ============

// Get the button
let scrollToTopButton = document.getElementById("btn-back-to-top");

function scrollFunction() {
  const scrolled = "scrolled";
  const threshold = 20;
  const body = document.body;
  const hasScrolledClass = body.classList.contains(scrolled);
  const isScrolled =
    body.scrollTop > threshold ||
    document.documentElement.scrollTop > threshold;

  if (isScrolled && !hasScrolledClass) {
    body.classList.add(scrolled);
    scrollToTopButton.style.display = "block";
    return;
  }

  if (!isScrolled && hasScrolledClass) {
    scrollToTopButton.style.display = "none";
    body.classList.remove(scrolled);
  }
}

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};
// check scroll position on initial page script in case the page is already scrolled.
scrollFunction();

// When the user clicks on the button, scroll to the top of the document
scrollToTopButton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
