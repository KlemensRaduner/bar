function signup(course_id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var row = document.getElementById(course_id);

      var button = row.getElementsByTagName("button")[0];
      button.innerHTML = "abmelden";
      button.className = "btn btn-danger";
    }
  };
  xhttp.open("GET", `signup.php?course_id=${course_id}`, true);
  xhttp.send();
}
