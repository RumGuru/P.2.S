let Name = document.getElementById('name');
let Email = document.getElementById('email');
let Address = document.getElementById('address');
let addressDrop = document.getElementById('collapse2');
let paymentDrop = document.getElementById('collapse3');

const checkPersonal = () =>{
    if (Name.value !== '' && Email.value !== '' ){
        addressDrop.classList.remove("collapse");
    }
}

const checkAddress = ()=>{
    if (Address.value !== ''){
        paymentDrop.classList.remove("collapse");
    }
}

//data-toggle="collapse"