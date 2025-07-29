document.getElementById('hamburger-button-js').addEventListener('click', function() {
  document.getElementById('mobile-nav-menu-js').classList.toggle('active');
  document.getElementById('overlay-js').classList.toggle('active');
  document.body.style.overflow='hidden';
});

document.getElementById('hamburger-closed-button-js').addEventListener('click', function() {
  document.getElementById('mobile-nav-menu-js').classList.toggle('active');
  document.getElementById('overlay-js').classList.toggle('active');
  document.body.style.overflow='';
});