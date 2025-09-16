    let img = document.getElementById("slide");
    let index = 1;              // bắt đầu từ 1.png
    let total = 4;              // số ảnh (vd: 4 ảnh: 1.png → 4.png)
    let timer = null;

    function jump() {
      if (timer) return;  // tránh bấm nhiều lần tạo nhiều interval
      timer = setInterval(() => {
        index++;
        if (index > total) index = 1; // quay lại ảnh đầu tiên
        img.src = `${index}.png`;
      }, 500); // đổi ảnh mỗi 0.5s
    }

    function stop() {
      clearInterval(timer);
      timer = null;
    }

    document.getElementById("jumpBtn").addEventListener("click", jump);
    document.getElementById("stopBtn").addEventListener("click", stop);