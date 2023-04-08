
    function validation()
    {
    var email=document.getElementById("email").value;
    var password=document.getElementById("password").value;
    if(email=="123" && password=="123")
        {
        alert("login successfully");
        window.location.href="http://localhost/sneat-1.0.0/html/addowner.php";
        // <a href="forgetpassword.php"></a>
        return false
    }
    else
    {
        alert("incorret");
        return false
        window.location.href="omnerlist.php";
    }
    }


