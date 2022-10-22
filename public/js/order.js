
    console.log('tesssssssssst  out ');


function addOrder() {


    console.log('tesssssssssst');
let names=document.getElementById("inputName").value;
let inputId=document.getElementById("inputId").value;
let inputAddress=document.getElementById("inputAddress").value;
let inputPhone=document.getElementById("inputPhone").value;
let inputCity=document.getElementById("inputCity").value;
let product_id=document.getElementById("product_id").value;

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to edit this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Approve it!'

        
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`/orderSave/${names}/${inputId}/${inputCity}/${inputPhone}/${inputAddress}/${product_id}`)
                .then(res=>res.json())
                .then(ress=>console.log(ress))
            Swal.fire(
                'APPROVED!',
                'We will contact with you soon ',
                'Thank You',
        ).then(function(){
            window.location.href="/";
        })  
        }
      
    })

}
