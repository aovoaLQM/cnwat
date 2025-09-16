// ======= SẮP XẾP =========
document.querySelectorAll("#productTable th").forEach((header, index) => {
  if (index === 0) return; // bỏ cột STT

  header.addEventListener("click", () => {
    const table = header.closest("table");
    const tbody = table.querySelector("tbody");
    const rows = Array.from(tbody.querySelectorAll("tr"));
    const isAscending = header.classList.contains("asc");

    // reset các cột khác
    table.querySelectorAll("th").forEach(th => th.classList.remove("asc", "desc"));

    // sắp xếp
    rows.sort((a, b) => {
      const cellA = a.children[index].innerText.toLowerCase();
      const cellB = b.children[index].innerText.toLowerCase();
      return isAscending
        ? cellB.localeCompare(cellA)
        : cellA.localeCompare(cellB);
    });

    // gắn lại class
    header.classList.toggle("asc", !isAscending);
    header.classList.toggle("desc", isAscending);

    // cập nhật lại tbody
    rows.forEach((row, i) => {
      row.children[0].innerText = i + 1; // cập nhật lại STT
      tbody.appendChild(row);
    });
  });
});

// ======= TÌM KIẾM =========
const searchInput = document.getElementById("searchInput");
searchInput.addEventListener("keyup", () => {
  const keyword = searchInput.value.toLowerCase();
  const rows = document.querySelectorAll("#productTable tbody tr");

  rows.forEach(row => {
    let textMatch = false;
    row.querySelectorAll("td").forEach((cell, i) => {
      if (i === 0) return; // bỏ qua cột STT
      let text = cell.innerText;
      let lower = text.toLowerCase();

      if (keyword && lower.includes(keyword)) {
        textMatch = true;
        // highlight
        const regex = new RegExp(`(${keyword})`, "gi");
        cell.innerHTML = text.replace(regex, `<span class="highlight">$1</span>`);
      } else {
        cell.innerHTML = text; // bỏ highlight
      }
    });

    // ẩn/hiện dòng
    row.style.display = textMatch || keyword === "" ? "" : "none";
  });
});
