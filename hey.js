
function validateForm()
{
    var firstname=document.querySelector("#firstname").value;
    var lastname=document.querySelector("#lastname").value;
    var dob=document.querySelector("#dob").value;
    var gender=document.querySelector("#gender").value;
    var email=document.querySelector("#email").value;
    var phone=document.querySelector("#phone").value;
    var institute=document.querySelector("#institute").value;
    var address=document.querySelector("#address").value;
    var usertype=document.querySelector("#usertype").value;
    var password=document.querySelector("#password").value;
    var cpassword=document.querySelector("#cpassword").value;
    var file=document.querySelector("#imageURL").value;

    var passwordcheck  =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;

    var bool=true;

    if(firstname=="" || lastname=="" || gender=="" || dob=="" || email=="" || phone=="" || institute=="" || address=="" || usertype=="" || password=="" || cpassword=="")
    {
        alert("PLEASE FILL ALL THE REQUIRED DETAILS");
        bool=false;
    }
    else if(file=="")
    {
        alert("PLEASE SELECT A PHOTO");
        bool=false;
    }
    else if(email.indexOf("@gmail.com")<1)
    {
        alert("PLEASE ENTER A VALID EMAIL");
        bool=false;
    }
    else if((phone.length)!=10)
    {
        alert("PLEASE ENTER A VALID PHONE NUMBER");
        bool=false;
    }
    else if(password.length<8 || password.length>16)
    {
        alert("PASSWORD MUST BE BETWEEN 8 TO 16 CHARACTERS");
        bool=false;
    }
    else if(cpassword.length<8 || cpassword.length>16)
    {
        alert("PASSWORD MUST BE BETWEEN 8 TO 16 CHARACTERS");
        bool=false;
    }
    else if(!passwordcheck.test(password))
    {
        alert("PASSWORD MUST CONTAIN ATLEAST A UPPERCASE CHARACTER A LOWERCASE CHARACTER A NUMBER AND A SPECIAL CHARACTER");
        bool=false;
    }
    else if(!passwordcheck.test(cpassword))
    {
        alert("PASSWORD MUST CONTAIN ATLEAST A UPPERCASE CHARACTER A LOWERCASE CHARACTER A NUMBER AND A SPECIAL CHARACTER");
        bool=false;
    }
    else if(password!=cpassword)
    {
        alert("THE CONFIRM PASSWORD MUST BE SAME AS THE PASSWORD");
        bool=false;
    }
    else
    {
        bool=true;
    }
    return bool;
}

var loadFile = function(event)
{
    var output=document.querySelector("#prev-image");
    var preview=document.querySelector("#preview");
    var ask=document.querySelector("#ask-input");
    var imageURL=document.querySelector("#imageURL");

    output.src=URL.createObjectURL(event.target.files[0]);
    ask.style.display="none";
    preview.style.display="block";
    imageURL.value=URL.createObjectURL(event.target.files[0]);

};
function remove()
{
    var output=document.querySelector("#prev-image");
    var preview=document.querySelector("#preview");
    var ask=document.querySelector("#ask-input");
    var imageURL=document.querySelector("#imageURL");

    ask.style.display="block";
    preview.style.display="none";

    URL.revokeObjectURL(output.src);
    imageURL.value="";
}

