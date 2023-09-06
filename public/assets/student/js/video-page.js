if (document.cookie.indexOf("email", "name") >= 0) {
  // The "username" cookie exists
  if (!(document.cookie.indexOf("status=Active") > -1)) {
    // Set the query parameter in the URL
    window.location.href = "index.html?alert=1";
  } else {
  }
} else {
  // The "username" cookie doesn't exist
  console.log("Cookie doesn't exist!");
  window.location = "../index.html";
}
