 let display = document.getElementById("result");

  function append(value) {
    if (display.value === "0") {
      display.value = value;
    } else {
      display.value += value;
    }
  }

  function clearAll() {
    display.value = "0";
  }

  function clearEntry() {
    display.value = display.value.slice(0, -1);
    if (display.value === "") display.value = "0";
  }

  function toggleSign() {
    if (display.value.startsWith("-")) {
      display.value = display.value.slice(1);
    } else if (display.value !== "0") {
      display.value = "-" + display.value;
    }
  }

  function calculate() {
    try {
      display.value = eval(display.value);
    } catch {
      display.value = "Error";
    }
  }