const Nameinput = document.querySelector('#C-Name');
const Numberinput = document.querySelector('#C-Number');
const cancelButton = document.querySelector('#btn-clear');
const addButton = document.querySelector('#btn-add');
const List = document.querySelector('#list');
const totalContact = document.querySelector('#C-Added');


var TotalC = 0;

const reset=() => {
    location.reload()
}

const clear =() => {
    Nameinput.value = '';
    Numberinput.value = '';
};

cancelButton.addEventListener('click', reset);

addButton.addEventListener('click', () => {
    const Name = Nameinput.value;
    const Number = Numberinput.value;


    if (Name.trim().length <= 0 ){
        alert("Please Input your Name!")
        return;
    }
    if (Number.trim().length == 0 ){
        alert("Please input your Number!")

        return;
    }
    else if (Number.trim().length < 11){
        alert("Contact number should 11 numbers !")
        return;
    }
   


    if (Nameinput.value != ''){
        TotalC += 1;
    }


    const newElement = document.createElement('ion-item');
        newElement.textContent = "Name: " + Name + Number;
        List.appendChild(newElement);

    
       totalContact.textContent = "Contacts Added: " + TotalC ;

    

       clear();
})





