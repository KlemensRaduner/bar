function swapStyles() {
  let style = localStorage.getItem("style");
  if (style === "light") {
    localStorage.setItem("style", "dark");
    document.getElementById("pagestyle").setAttribute("href", "styles_dark.css");
  } else {
    localStorage.setItem("style", "light");
    document.getElementById("pagestyle").setAttribute("href", "styles.css");
  }
}

let style = localStorage.getItem("style");
if (style === "light") {
  document.getElementById("pagestyle").setAttribute("href", "styles.css");
} else {
  localStorage.setItem("style", "dark");
  document.getElementById("pagestyle").setAttribute("href", "styles_dark.css");
}
