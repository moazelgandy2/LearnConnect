const user = document.getElementById("username");
const pass = document.getElementById("password");

user.addEventListener("blur", required);
pass.addEventListener("blur", required);

//requires  a value
function required(e) {
  let v = Array.from(e.target.parentNode.parentNode.querySelectorAll("h2"));
  if (!e.target.value && !v.length) {
    e.target.parentNode.insertAdjacentHTML(
      "afterend",
      '<h2 class"req" style="color: red">required</h2>'
    );
  } else {
    v.forEach((x) => x.remove());
  }
}

pass.addEventListener("blur", userMatch);

// matches password
function userMatch(e) {
  let all = Array.from(e.target.parentNode.parentNode.querySelectorAll("h5"));
  let v = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/g;
  if (pass.value.length >= 1) {
    if (!v.test(pass.value) && !all.length) {
      e.target.parentNode.insertAdjacentHTML(
        "afterend",
        '<h5 class"req" style="color: red">Minimum of eight characters, at least one uppercase letter, one lowercase letter and one number</h5>'
      );
    } else {
      all.forEach((x) => x.remove());
    }
  } else {
    all.forEach((x) => x.remove());
  }
}

const btn = document.querySelector("#submit");
btn.addEventListener("click", successful);

//Successful
function successful(e) {
  let users = JSON.parse(localStorage.getItem("information"));
  let usernames = [];
  let passwords = [];
  for (var i = 0; i < users.length; i++) {
    usernames.push(users[i].username);
    passwords.push(users[i].password);
  }
  console.log(usernames);
  console.log(passwords);

  let all = Array.from(e.target.parentNode.querySelectorAll(".error"));

  if (user.value) {
    e.preventDefault();
    if (!usernames.includes(user.value) && !all.length) {
      let title = document.querySelector("h1");
      let error = document.createElement("div");
      let textNode = document.createTextNode("Username does not exist");
      error.classList.add("error");
      error.appendChild(textNode);
      title.parentNode.insertBefore(error, title.nextElementSibling);
    } else {
      all.forEach((x) => x.remove());
    }
  }

  let no = usernames.indexOf(user.value);
  console.log(no);
  if (usernames.includes(user.value)) {
    if (pass.value) {
      console.log(passwords[no]);
      e.preventDefault();
      // if (passwords[no] !== pass.value && !all.length) {
      //   let title = document.querySelector("h1");
      //   let error = document.createElement("div");
      //   let textNode = document.createTextNode("Password does not match");
      //   error.classList.add("error");
      //   error.appendChild(textNode);
      //   title.parentNode.insertBefore(error, title.nextElementSibling);
      // } else {
      //   e.preventDefault();
      //   all.forEach((x) => x.remove());
      // }
    }
  }
  if (passwords[no] == pass.value) {
    alert("congrats");
  }
}
