const selectAllCheckbox = document.getElementById('selectAll');
const checkboxes = document.querySelectorAll('.row-checkbox');
const rows = document.querySelectorAll('#employeeTable tbody tr');

// Hàm cập nhật màu nền dòng theo trạng thái checkbox
function updateRowHighlight(row, isChecked, index) {
  if (isChecked) {
    row.classList.add('selected');
  } else {
    row.classList.remove('selected');
    // trả lại màu gốc theo chẵn/lẻ
    if ((index + 1) % 2 === 0) {
      row.style.backgroundColor = "#e6f2ff"; // chẵn
    } else {
      row.style.backgroundColor = "#f9f9f9"; // lẻ
    }
  }
}

// Hàm cập nhật trạng thái ô "chọn tất cả"
function updateSelectAll() {
  const allChecked = Array.from(checkboxes).every(cb => cb.checked);
  selectAllCheckbox.checked = allChecked;
}

// 1. Click vào ô "chọn tất cả"
selectAllCheckbox.addEventListener('change', function () {
  checkboxes.forEach((cb, index) => {
    cb.checked = this.checked;
    updateRowHighlight(rows[index], cb.checked, index);
  });
});

// 2. Khi mỗi checkbox con thay đổi
checkboxes.forEach((checkbox, index) => {
  checkbox.addEventListener('change', function () {
    updateRowHighlight(rows[index], this.checked, index);
    updateSelectAll();
  });
});

// 3. Click vào dòng (trừ checkbox)
rows.forEach((row, index) => {
  row.addEventListener('click', function (e) {
    if (e.target.type === 'checkbox') return; // tránh xung đột
    checkboxes[index].checked = !checkboxes[index].checked;
    updateRowHighlight(row, checkboxes[index].checked, index);
    updateSelectAll();
  });
});
