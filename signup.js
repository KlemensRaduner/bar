function signup(course_id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var row = document.getElementById(course_id);
      var button = row.getElementsByTagName("button")[0];
      button.innerHTML = "abmelden";
      button.onclick = () => signout(course_id);
      button.className = "btn btn-danger";

      var freeSpaces = row.querySelector('span[name="freeSpaces"]');
      freeSpaces.innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", `signup.php?course_id=${course_id}`, true);
  xhttp.send();
}

function signout(course_id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var row = document.getElementById(course_id);
      var button = row.getElementsByTagName("button")[0];
      button.innerHTML = "anmelden";
      button.onclick = () => signup(course_id);
      button.className = "btn btn-dark";

      var freeSpaces = row.querySelector('span[name="freeSpaces"]');
      freeSpaces.innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", `signout.php?course_id=${course_id}`, true);
  xhttp.send();
}
