document.getElementById("name").onblur= function() {
    let isName = /^[a-zA-Z\s]+$/igm.test(document.getElementById("name").value);
    if(!isName) {
        document.getElementById("NameErr").innerHTML="* Name Must Be Letters Only";
    } 
    else {
        document.getElementById("NameErr").innerHTML="*";
    }
}

document.getElementById("email").onblur= function() {
    let isName = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/ig.test(document.getElementById("email").value);
    let userEmail=document.getElementById("email").value;
    fetch('checkEmail.php', {
        method: 'POST', // or 'PUT'
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded', 
        },
        body: `email=${userEmail}`,
        })
        .then((response) => {
            response.text().then(res=>{
                console.log(res);
                if(res==1) {
                    document.getElementById("spanEmail").innerHTML="* Email is Already Registred";
                }
                else if(!isName){
                    document.getElementById("spanEmail").innerHTML="* Email Must Be Valid Form Like : test@gmail.com";
                }
                else {
                    document.getElementById("spanEmail").innerHTML="* ";
                }
            });
        })
        .catch((error) => {
            console.error('Error:', error);
        });
}

// document.getElementById("phone").onblur= function() {
//     let isName = /^\d{10}$/igm.test(document.getElementById("phone").value);
//     if(!isName) {
//         document.getElementById("spanPhone").innerHTML="* Phone Number Must Be 10 Numbers";
//     }
//     else {
//         document.getElementById("spanPhone").innerHTML="*";
//     }
// }
// document.getElementById("city").onblur= function() {
//     let isName = /^[a-zA-Z\s]+$/igm.test(document.getElementById("city").value);
//     if(!isName) {
//         document.getElementById("spanCity").innerHTML="* City Must Be Letters Only";
//     }
//     else {
//         document.getElementById("spanCity").innerHTML="*";
//     }
// }
// document.getElementById("address").onblur= function() {
//     let isName = /^[a-zA-Z\s0-9-/,]+$/igm.test(document.getElementById("address").value);
//     if(!isName) {
//         document.getElementById("spanAddress").innerHTML="* Address Must Be Letters Only";
//     }
//     else {
//         document.getElementById("spanAddress").innerHTML="*";
//     }
// }
document.getElementById("password").onblur= function() {
    let isName = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/.test(document.getElementById("password").value);
    if(!isName) {
        document.getElementById("spanPassword").innerHTML="* Password Must Be Contain Uppercase , Lowercase , Number, Special Character";
    }
    else {
        document.getElementById("spanPassword").innerHTML="*";
    }
}
document.getElementById("password_confirmation").onblur= function() {
    let isName = document.getElementById("password_confirmation").value==document.getElementById("password").value;
    if(!isName) {
        document.getElementById("spanCPassword").innerHTML="* Confirm Password Doesn't Match";
    }
    else {
        document.getElementById("spanCPassword").innerHTML="*";
    }
}