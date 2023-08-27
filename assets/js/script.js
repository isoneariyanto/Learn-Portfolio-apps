const select = (el, all = false) => {
  el = el.trim();
  if (all) {
    return [...document.querySelectorAll(el)];
  } else {
    return document.querySelector(el);
  }
};

$('#toggle').on('click', function(){
  this.classList.toggle("toggle");
  select(".navbar-menu").classList.toggle("active");
});