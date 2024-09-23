document.addEventListener("DOMContentLoaded", function () {
  const urlParams = new URLSearchParams(window.location.search);
  const signUpStatus = urlParams.get("signup");

  if (signUpStatus === "success") {
    const container = document.getElementById("container");
    container.classList.remove("right-panel-active");

    const successMessage = document.createElement("p");
    successMessage.textContent = "Sign up successful! You can now log in.";
    successMessage.style.color = "green";
    successMessage.style.marginTop = "20px";

    const signInForm = container.querySelector(".sign-in-container form");
    signInForm.insertBefore(successMessage, signInForm.firstChild);
  } else if (signUpStatus === "exists") {
    const container = document.getElementById("container");
    container.classList.add("right-panel-active");

    const errorMessage = document.createElement("p");
    errorMessage.textContent = "Email or mobile number already registered.";
    errorMessage.style.color = "red";
    errorMessage.style.marginTop = "20px";

    const signUpForm = container.querySelector(".sign-up-container form");
    signUpForm.insertBefore(errorMessage, signUpForm.firstChild);
  }
});

const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton.addEventListener("click", () =>
  container.classList.add("right-panel-active")
);

signInButton.addEventListener("click", () =>
  container.classList.remove("right-panel-active")
);

function validateSignUpForm() {
  const password = document.querySelector('input[name="password"]').value;
  const confirmPassword = document.querySelector(
    'input[name="confirm_password"]'
  ).value;
  const mobile = document.querySelector('input[name="mobile"]').value;

  if (password !== confirmPassword) {
    alert("Passwords do not match.");
    return false;
  }

  const mobilePattern = /^[0-9]{10}$/;
  if (!mobilePattern.test(mobile)) {
    alert("Please enter a valid mobile number.");
    return false;
  }

  return true;
}

function validateSignInForm() {
  // Additional validation if needed
  return true;
}
