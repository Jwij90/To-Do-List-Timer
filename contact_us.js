//arrow function to return element when passed id
let id = (id) => document. getElementById(id);
//getting form elements by id
let uname = id("name"),
email = id("email"),
message = id("message"),
nameError = id("nameError"),
emailError = id("emailError"),
messageError = id("messageError"),
form = id("form");
//adding event listner to submit button
form. addEventListener("submit", (e) => {
e. preventDefault();
checkEmpty("Name", uname, nameError);
checkEmail(email. value);
checkEmpty("Message", message, messageError);
})
