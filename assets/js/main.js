document.getElementById("mobileButton").onclick = function () {
  if (navbarSupportedContent.classList.contains("active")) {
    document
      .getElementById("navbarSupportedContent")
      .classList.remove("active");
  } else {
    document.getElementById("navbarSupportedContent").classList.add("active");
  }
};
