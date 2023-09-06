const user = document.getElementById("username");
const pass = document.getElementById("password");
const confirm = document.getElementById("confirm");

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

confirm.addEventListener("blur", match);

//confirms password
function match(e) {
  let v = Array.from(e.target.parentNode.parentNode.querySelectorAll("h3"));
  let all = Array.from(e.target.parentNode.parentNode.querySelectorAll("h5"));

  if (!all.length) {
    if (confirm.value !== pass.value && !v.length) {
      e.target.parentNode.insertAdjacentHTML(
        "afterend",
        '<h3 class="pass" style="color: red">password must match</h3>'
      );
      return false;
    } else {
      v.forEach((x) => x.remove());
      return true;
    }
  }
}

const btn = document.querySelector("#submit");
btn.addEventListener("click", successful);

//Username Exists
user.addEventListener("blur", matchUser);

function matchUser(e) {
  let v = Array.from(e.target.parentNode.parentNode.querySelectorAll("h3"));
  let all = Array.from(e.target.parentNode.parentNode.querySelectorAll("h5"));

  if (!all.length) {
    let c = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/g;
    if (confirm.value.length > 8 && confirm.value == pass.value) {
      if (!v.length) {
        e.target.parentNode.insertAdjacentHTML(
          "afterend",
          '<h3 class="pass" style="color: red">username already exists</h3>'
        );
        return false;
      } else {
        v.forEach((x) => x.remove());
        return true;
      }
    }
  }
}

//successful
function successful(e) {
  let all = Array.from(document.querySelectorAll("input")).every(
    (x) => x.value
  );
  let users = {
    username: user.value,
    password: pass.value,
  };

  let usersJ = JSON.parse(localStorage.getItem("information"));
  let usernames = [];
  let passwords = [];
  let v = Array.from(e.target.parentNode.parentNode.querySelectorAll("h3"));

  for (var i = 0; i < usersJ.length; i++) {
    usernames.push(usersJ[i].username);
    passwords.push(usersJ[i].password);
  }

  if (!usernames.includes(user.value)) {
    if (confirm.value === pass.value) {
      if (all) {
        e.preventDefault();
        if (localStorage.getItem("information") == null) {
          let user = [];
          user.push(users);
          localStorage.setItem("information", JSON.stringify(user));
        } else {
          let user = JSON.parse(localStorage.getItem("information"));
          user.push(users);
          localStorage.setItem("information", JSON.stringify(user));
        }
        document.querySelector("h1").textContent =
          "User's registration was successful🥳";
        document.querySelector("h1").style.fontSize = "20px";
        document.querySelector("h1").style.color = "#01FEFF";
      }
    } else {
      e.preventDefault();
      let v = Array.from(e.target.parentNode.parentNode.querySelectorAll("h3"));
      let all = Array.from(
        e.target.parentNode.parentNode.querySelectorAll("h5")
      );

      if (!all.length) {
        if (confirm.value !== pass.value && !v.length) {
          confirm.parentNode.insertAdjacentHTML(
            "afterend",
            '<h3 class="pass" style="color: red">password must match</h3>'
          );
          return false;
        } else {
          v.forEach((x) => x.remove());
          return true;
        }
      }
    }
  } else {
    e.preventDefault();
    if (usernames.includes(user.value) && !v.length) {
      user.parentNode.insertAdjacentHTML(
        "afterend",
        '<h3 class="pass" style="color: red">username already exists</h3>'
      );
    } else {
      v.forEach((x) => x.remove());
    }
  }
}
