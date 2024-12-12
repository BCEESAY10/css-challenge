const menuIcon = document.getElementById("menu-icon");
const Lines = document.querySelectorAll(".no-animation");
const board = document.getElementById("board");
const main = document.getElementById("main");

menuIcon.addEventListener("click", () => {
  menuIcon.classList.toggle("active");

  if(menuIcon.classList.contains('active')){
      board.classList.remove('hide');
      //main.classList.add('hide');
  } else {
    board.classList.add('hide');
    
  }

  Lines.forEach((line) => {
    line.classList.remove("no-animation");
  });
});

