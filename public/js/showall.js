var t = document.getElementsByName("hidden");
console.log(t[0]);
var x = document.getElementById("show-all-tl");

function hideShow() {
  for (i = 0; i < t.length; i++) {
    if (t[i].style.display === "none") {
      t[i].style.display = "block";
      x.innerHTML = "Ẩn bớt";
    } else {
      t[i].style.display = "none";
      x.innerHTML = "Xem tất cả";
    }
  }
}

var qg = document.getElementsByName("hidenQG");
var qgs = document.getElementById("show-all-qg");
function hideShowQG() {
  for (i = 0; i < qg.length; i++) {
    if (qg[i].style.display === "none") {
      qg[i].style.display = "block";
      qgs.innerHTML = "Ẩn bớt";
    } else {
      qg[i].style.display = "none";
      qgs.innerHTML = "Xem tất cả";
    }
  }
}
