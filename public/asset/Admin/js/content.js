document.getElementById("block1").style.display = "block";
function contentDisplay(blockNumber) {
  // Hide all blocks
  var blocks = document.getElementsByClassName("content");
  for (var i = 0; i < blocks.length; i++) {
    blocks[i].style.display = "none";
  }

  // Show the selected block
  var selectedBlock = document.getElementById("block" + blockNumber);
  selectedBlock.style.display = "block";
}
// var div=document.getElementsByClassName("contentd");
// function showdetails(){  
//   div.style.display="block";  
// }
// div.addEventListener('click', showdetails);