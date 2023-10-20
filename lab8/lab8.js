function getDataFromForm() {
  var firstname = document.getElementById('fname').value;
  var lastname = document.getElementById('lname').value;
  runAjax(firstname, lastname);
}

function runAjax(fname, lname) {
  const xhr = new XMLHttpRequest();
  xhr.onload = function () {
      if (xhr.status == 200) {
          document.getElementById("responseString").innerHTML = xhr.responseText;
      } else if (xhr.status == 404) {
          console.log("Req failed: " + xhr.status);
          document.getElementById("responseString").innerHTML = "File or resource not found";
      }
      console.log("Req status: " + xhr.status);
  };
  xhr.open("GET", `./ajax.php?fname=${fname}&lname=${lname}`, true);
  xhr.send();
}
