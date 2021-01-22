function openTab(evt, name) {
  var i, tab, tablink;
  tab = document.getElementsByClassName("fixidtab");
  for (i = 0; i < tab.length; i++) {
    tab[i].style.display = "none";
  }
  tablink = document.getElementsByClassName("tab-links");
  for (i = 0; i < tablink.length; i++) {
    tablink[i].className = tablink[i].className.replace("active", "");
  }
  document.getElementById(name).style.display = "block";
  evt.currentTarget.className += "";
}
document.getElementById("defaultOpen").click();

/*Đánh dáu sao */
let ratingitem = document.querySelectorAll(".rating-item");

for (let i = 0; i < ratingitem.length; i++) {
  ratingitem[i].addEventListener("click", function (e) {
    let li = e.target;
    for (let i = 0; i < ratingitem.length; i++) {
      ratingitem[i].classList.remove("active");
    }
    li.classList.add("active");
    console.log(li.dataset.rate);
  });
}
