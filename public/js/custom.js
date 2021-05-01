function myFunction(more) {
  var moreText = document.getElementById(more);

  if (more == "more1") {
    var dots = document.getElementById("dots1");
    var btnText = document.getElementById("myBtn1");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";
    }
    else {
      dots.style.display = "none";
      btnText.innerHTML = "Lire Moins -";
      moreText.style.display = "inline";

      var dots = document.getElementById("dots2");
      var btnText = document.getElementById("myBtn2");
      var moreText = document.getElementById("more2");

      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";

      var dots = document.getElementById("dots3");
      var btnText = document.getElementById("myBtn3");
      var moreText = document.getElementById("more3");

      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";
    }
  }
  else if (more == "more2") {
    var dots = document.getElementById("dots2");
    var btnText = document.getElementById("myBtn2");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";
    }
    else {
      dots.style.display = "none";
      btnText.innerHTML = "Lire Moins -";
      moreText.style.display = "inline";

      var dots = document.getElementById("dots1");
      var btnText = document.getElementById("myBtn1");
      var moreText = document.getElementById("more1");

      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";

      var dots = document.getElementById("dots3");
      var btnText = document.getElementById("myBtn3");
      var moreText = document.getElementById("more3");

      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";
    }
  }
  else if (more == "more3") {
    var dots = document.getElementById("dots3");
    var btnText = document.getElementById("myBtn3");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";
    }
    else {
      dots.style.display = "none";
      btnText.innerHTML = "Lire Moins -";
      moreText.style.display = "inline";

      var dots = document.getElementById("dots2");
      var btnText = document.getElementById("myBtn2");
      var moreText = document.getElementById("more2");

      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";

      var dots = document.getElementById("dots1");
      var btnText = document.getElementById("myBtn1");
      var moreText = document.getElementById("more1");

      dots.style.display = "inline";
      btnText.innerHTML = "Lire la suite +";
      moreText.style.display = "none";
    }
  }
}


var i = 0;
var j = 0;
var cnt = 0;

function typeWriter() {

  var txt = "CENTRE DENTAIRE LARGOU TIZNIT";
  var descr = "L'UNE DES MEILLEURES CLINIQUES DENTAIRES DE TIZNIT";

  if (i < txt.length) {
    document.getElementById("textAcc").innerHTML += txt.charAt(i);
    document.getElementById("textAcc2").innerHTML += txt.charAt(i);
    i++;
  }

  if (cnt == (descr.length + 60)) {
    i = 0;
    document.getElementById("textAcc").innerHTML = "";
    document.getElementById("textAcc2").innerHTML = "";
    j = 0;
    cnt = 0;
    document.getElementById("textDescr").innerHTML = "";
    document.getElementById("textDescr2").innerHTML = "";
  }
  if (j < descr.length) {
    document.getElementById("textDescr").innerHTML += descr.charAt(j);
    document.getElementById("textDescr2").innerHTML += descr.charAt(j);
    j++;
  }
  cnt++;
  setTimeout(typeWriter, 80);
}
function click_(id_) {
  document.getElementById("acc").className = "nav-link";
  document.getElementById("spe").className = "nav-link";
  document.getElementById("ser").className = "nav-link";
  document.getElementById("con").className = "nav-link";
  document.getElementById("apr").className = "nav-link";
  document.getElementById(id_).className += " active";
}