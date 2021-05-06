<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     
$(document).ready(function() {
$("#submit").click(function() {
var name = $("#input-val12").val();
var email = $("#input-val12").val();
var contact = $("#input-val12").val();
//var gender = $("input[type=radio]:checked").val();
var msg = $("#input-val12").val();
 var a = $("#input-val12").val();
    var b = $("#input-val12").val();
if (name == '' || email == '' || contact == '' || msg == '' || a == '' ||b) {
alert("Insertion Failed Some Fields are Blank....!!");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("refreshform.php", {
name1: name,
email1: email,
contact1: contact,
gender1: gender,
msg1: msg
}, function(data) {
alert(data);
$('#form')[0].reset(); // To reset form fields
});
}
});
});
