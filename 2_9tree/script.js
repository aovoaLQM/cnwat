// Toggle mở/đóng thư mục
const toggler = document.getElementsByClassName("caret");
for (let i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function(e) {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");

    // Ngăn việc chọn node khi bấm vào caret
    e.stopPropagation();
  });
}

// Chọn node
const allNodes = document.querySelectorAll("#tree li");
allNodes.forEach(node => {
  node.addEventListener("click", function(e) {
    // Bỏ chọn cũ
    allNodes.forEach(n => n.classList.remove("selected"));
    // Chọn node hiện tại
    this.classList.add("selected");
    e.stopPropagation();
  });
});
