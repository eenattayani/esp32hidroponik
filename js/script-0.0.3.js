// config
const urlLt1a = "client-1a.php";
const urlLt1b = "client-1b.php";
const urlLt2a = "client-2a.php";
const urlLt2b = "client-2b.php";

// variabel
let requestPHP = {
  lt1a: false,
  lt1b: false,
  lt2a: false,
  lt2b: false,
};

setInterval(() => {
  lt1aRequest();
  lt1bRequest();
  lt2aRequest();
  lt2bRequest();
}, 1000);

function cekRespon(teks) {
  let teksDataLampu;

  switch (teks) {
    case "5":
      teksDataLampu = "All Red";
      break;
    case "1":
      teksDataLampu = "SG 1 Hijau";
      break;
    case "11":
      teksDataLampu = "SG 1 Merah Kuning";
      break;
    case "12":
      teksDataLampu = "SG 1 Kuning";
      break;
    case "2":
      teksDataLampu = "SG 2 Hijau";
      break;
    case "21":
      teksDataLampu = "SG 2 Merah Kuning";
      break;
    case "22":
      teksDataLampu = "SG 2 Kuning";
      break;
    case "3":
      teksDataLampu = "SG 3 Hijau";
      break;
    case "31":
      teksDataLampu = "SG 3 Merah Kuning";
      break;
    case "32":
      teksDataLampu = "SG 3 Kuning";
      break;
    case "4":
      teksDataLampu = "SG 4 Hijau";
      break;
    case "41":
      teksDataLampu = "SG 4 Merah Kuning";
      break;
    case "42":
      teksDataLampu = "SG 4 Kuning";
      break;
    case "52":
    case "50":
      teksDataLampu = "Flashing";
      break;

    default:
      teksDataLampu = "---";
      break;
  }
  return teksDataLampu;
}

function lt1aRequest() {
  if (requestPHP.lt1a == false) {
    requestPHP.lt1a = true;

    let ajaxRequest = new XMLHttpRequest();

    ajaxRequest.onreadystatechange = function () {
      if (ajaxRequest.readyState == 4) {
        requestPHP.lt1a = false;

        const status = document.querySelector("#status-lt1a");
        const dataEsp = document.querySelector("#data-lt1a");
        const idEsp = document.querySelector("#id-lt1a");

        let responTeks = ajaxRequest.responseText;
        let arrRespon = responTeks.split(":");

        //   arrRespon[0] ==> dataAlat
        //   arrRespon[1] ==> count
        //   arrRespon[2] ==> status
        //   arrRespon[3] ==> id

        console.log("lt1a:", responTeks);

        // let teksDataEsp = cekRespon(arrRespon[0]);
        let teksDataEsp = arrRespon[0];

        if (status) {
          idEsp.textContent = arrRespon[3];
          status.textContent = arrRespon[2];
          dataEsp.textContent = teksDataEsp;
          if (arrRespon[2] === "terhubung") {
            status.classList.remove("text-danger");
            status.classList.add("text-primary");
          } else if (arrRespon[2] === "koneksi terputus") {
            status.classList.remove("text-primary");
            status.classList.add("text-danger");
          }
        }
      }
    };

    ajaxRequest.open("GET", urlLt1a, true);
    ajaxRequest.send(null);
  }
}

function lt1bRequest() {
  if (requestPHP.lt1b == false) {
    requestPHP.lt1b = true;

    let ajaxRequest = new XMLHttpRequest();

    ajaxRequest.onreadystatechange = function () {
      if (ajaxRequest.readyState == 4) {
        requestPHP.lt1b = false;

        const status = document.querySelector("#status-lt1b");
        const dataEsp = document.querySelector("#data-lt1b");
        const idEsp = document.querySelector("#id-lt1b");

        let responTeks = ajaxRequest.responseText;
        let arrRespon = responTeks.split(":");

        //   arrRespon[0] ==> dataAlat
        //   arrRespon[1] ==> count
        //   arrRespon[2] ==> status
        //   arrRespon[3] ==> id

        console.log("lt1b:", responTeks);

        // let teksDataEsp = cekRespon(arrRespon[0]);
        let teksDataEsp = arrRespon[0];

        if (status) {
          idEsp.textContent = arrRespon[3];
          status.textContent = arrRespon[2];
          dataEsp.textContent = teksDataEsp;
          if (arrRespon[2] === "terhubung") {
            status.classList.remove("text-danger");
            status.classList.add("text-primary");
          } else if (arrRespon[2] === "koneksi terputus") {
            status.classList.remove("text-primary");
            status.classList.add("text-danger");
          }
        }
      }
    };

    ajaxRequest.open("GET", urlLt1b, true);
    ajaxRequest.send(null);
  }
}

function lt2aRequest() {
  if (requestPHP.lt2a == false) {
    requestPHP.lt2a = true;

    let ajaxRequest = new XMLHttpRequest();

    ajaxRequest.onreadystatechange = function () {
      if (ajaxRequest.readyState == 4) {
        requestPHP.lt2a = false;

        const status = document.querySelector("#status-lt2a");
        const dataEsp = document.querySelector("#data-lt2a");
        const idEsp = document.querySelector("#id-lt2a");

        let responTeks = ajaxRequest.responseText;
        let arrRespon = responTeks.split(":");

        //   arrRespon[0] ==> dataAlat
        //   arrRespon[1] ==> count
        //   arrRespon[2] ==> status
        //   arrRespon[3] ==> id

        console.log("lt2a:", responTeks);

        // let teksDataEsp = cekRespon(arrRespon[0]);
        let teksDataEsp = arrRespon[0];

        if (status) {
          idEsp.textContent = arrRespon[3];
          status.textContent = arrRespon[2];
          dataEsp.textContent = teksDataEsp;
          if (arrRespon[2] === "terhubung") {
            status.classList.remove("text-danger");
            status.classList.add("text-primary");
          } else if (arrRespon[2] === "koneksi terputus") {
            status.classList.remove("text-primary");
            status.classList.add("text-danger");
          }
        }
      }
    };

    ajaxRequest.open("GET", urlLt2a, true);
    ajaxRequest.send(null);
  }
}

function lt2bRequest() {
  if (requestPHP.lt2b == false) {
    requestPHP.lt2b = true;

    let ajaxRequest = new XMLHttpRequest();

    ajaxRequest.onreadystatechange = function () {
      if (ajaxRequest.readyState == 4) {
        requestPHP.lt2b = false;

        const status = document.querySelector("#status-lt2b");
        const dataEsp = document.querySelector("#data-lt2b");
        const idEsp = document.querySelector("#id-lt2b");

        let responTeks = ajaxRequest.responseText;
        let arrRespon = responTeks.split(":");

        //   arrRespon[0] ==> dataAlat
        //   arrRespon[1] ==> count
        //   arrRespon[2] ==> status
        //   arrRespon[3] ==> id

        console.log("lt2b:", responTeks);

        // let teksDataEsp = cekRespon(arrRespon[0]);
        let teksDataEsp = arrRespon[0];

        if (status) {
          idEsp.textContent = arrRespon[3];
          status.textContent = arrRespon[2];
          dataEsp.textContent = teksDataEsp;
          if (arrRespon[2] === "terhubung") {
            status.classList.remove("text-danger");
            status.classList.add("text-primary");
          } else if (arrRespon[2] === "koneksi terputus") {
            status.classList.remove("text-primary");
            status.classList.add("text-danger");
          }
        }
      }
    };

    ajaxRequest.open("GET", urlLt2b, true);
    ajaxRequest.send(null);
  }
}
