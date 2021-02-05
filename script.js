function myFunction() {
var fname = document.getElementById("name").value;
var lname = document.getElementById("email").value;
var password = document.getElementById("password").value;
var contact = document.getElementById("contact").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&fname1=' + fname + '&lname1=' + lname ;
if (fname == '' || lname == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "ajaxjs.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}