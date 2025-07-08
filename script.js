function convertJS() {
      const input = parseFloat(document.getElementById("jsInput").value);
      const convertTo = document.getElementById("jsSelect").value;
      let result = "";

      if (isNaN(input)) {
        result = "Masukkan angka yang valid.";
      } else {
        if (convertTo === "toF") {
          result = `${input}°C = ${(input * 9/5 + 32).toFixed(2)}°F`;
        } else {
          result = `${input}°F = ${((input - 32) * 5/9).toFixed(2)}°C`;
        }
      }

      document.getElementById("jsResult").innerText = result;
    }