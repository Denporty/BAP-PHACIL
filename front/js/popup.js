function openForm() {
  document.getElementById("myForm").style.display = "flex";
  document.getElementById("home-section").style.filter = "blur(20px)";
  document.getElementById("myForm1").style.display = "none";
  document.getElementById("myForm2").style.display = "none";
  document.getElementById("gang").style.overflow = "hidden";
  
}


function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("home-section").style.filter = "none";
  document.getElementById("gang").style.overflow = "";
}


function openForm1() {
  document.getElementById("myForm1").style.display = "flex";
  document.getElementById("home-section").style.filter = "blur(20px)";
  document.getElementById("myForm").style.display = "none";
  document.getElementById("myForm2").style.display = "none";
  document.getElementById("gang").style.overflow = "hidden";
  
}


function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
  document.getElementById("home-section").style.filter = "none";
  document.getElementById("gang").style.overflow = "";
}

function openForm2() {
  document.getElementById("myForm2").style.display = "flex";
  document.getElementById("home-section").style.filter = "blur(20px)";
  document.getElementById("myForm1").style.display = "none";
  document.getElementById("gang").style.overflow = "hidden";
  
}


function closeForm2() {
  document.getElementById("myForm2").style.display = "none";
  document.getElementById("home-section").style.filter = "none";
  document.getElementById("gang").style.overflow = "";
}