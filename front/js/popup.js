function openForm() {
  document.getElementById("myForm").style.display = "flex";
  document.getElementById("home-section").style.filter = "blur(20px)";
  document.getElementById("myForm1").style.display = "none";
  document.getElementById("myForm2").style.display = "none";
  
}


function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("home-section").style.filter = "none";
}


function openForm1() {
  document.getElementById("myForm1").style.display = "flex";
  document.getElementById("home-section").style.filter = "blur(20px)";
  document.getElementById("myForm").style.display = "none";
  document.getElementById("myForm2").style.display = "none";
  
}


function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
  document.getElementById("home-section").style.filter = "none";
}

function openForm2() {
  document.getElementById("myForm2").style.display = "flex";
  document.getElementById("home-section").style.filter = "blur(20px)";
  document.getElementById("myForm1").style.display = "none";
  
}


function closeForm2() {
  document.getElementById("myForm2").style.display = "none";
  document.getElementById("home-section").style.filter = "none";
}