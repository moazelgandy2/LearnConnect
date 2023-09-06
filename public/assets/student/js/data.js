// Check if a cookie with the name "username" exists
if (document.cookie.indexOf("email", "name") >= 0) {
  // The "username" cookie exists
  window.location = "../dashboard/index.html";
} else {
  // The "username" cookie doesn't exist
  console.log("Cookie doesn't exist!");
}
