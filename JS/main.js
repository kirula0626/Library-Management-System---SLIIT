//------------------------------ Slider ---------------------------------------------
var slideCount = 0;

function carousel() {
    var i;
    var x = document.getElementsByClassName("mainSlide");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    slideCount++;
    if (slideCount > x.length) { slideCount = 1 }
    x[slideCount - 1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

//------------------------------ /Slider ---------------------------------------------

//------------------------------Time---------------------------------------------------
function time() {
    var date_time = new Date();
    var month = date_time.getMonth();
    var date = date_time.getDate();
    if (month < 10) {
        month = '0' + month;
    }

    if (date < 10) {
        date = '0' + date;
    }

    var Current_date = date + " - " + month + " - " + date_time.getFullYear();
    //alert(date_time);
    var Current_time = date_time.getHours() + " : " + date_time.getMinutes() + " : " + date_time.getSeconds();
    document.getElementById("date_time").innerHTML = Current_date + " | " + Current_time;
}

//-------------------------------------


//--------------------------------------------



//--------------------------------------------

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

if (dd < 10) {
    dd = '0' + dd;
}

if (mm < 10) {
    mm = '0' + mm;
}

today = yyyy + '-' + mm + '-' + dd;
document.getElementById("Lend_Book_Member_Table_DueDate").setAttribute("min", today);
document.getElementById("Lend_Book_Member_Table_LendDate").setAttribute("value", today);
document.getElementById("Add_New_Book").setAttribute("value", today);
document.getElementById("Retrieve_Book_Table_submitDate").setAttribute("value", today);


function closeWindow() {
    window.opener;
    window.close();
}


function passwordCheck() {
    var password = document.getElementById('pwd');
    var confpassword = document.getElementById('confirmPwd');

    if (password === confpassword) {
        document.getElementById('pwdCheck') = "Password Matched";
    } else {
        document.getElementById('pwdCheck') = "Password does not Match";
    }
}



function mailtyping() {
    var tpMail = document.getElementById("email");
    var autoMail = document.getElementById("sliitMail");

    autoMail.value = tpMail.value;

}