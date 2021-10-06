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





/*
const alertInputControl = document.querySelector('#ion-alert-controller');
const balance = document.querySelector('#bal');
const addBal = document.querySelector('#cur-add')
var curBalance = document.querySelector('#cur')
var finalamount; 
var finalbal;

let myTotalExpenses = 0;

const reset=() => {
    location.reload()
}

const clear =() => {
    reasonInput.value = '';
    amountInput.value = '';
    itemQuantity.value = '';
};

cancelButton.addEventListener('click', reset);



addBal.addEventListener('click', () => {
    const currentbal = balance.value;
    if (currentbal <= 0 ){
        alert("YOUR BALANCE IS LESS THAN 0!");
        
        return;
    }
    document.getElementById("bal").disabled = true;
    curBalance.textContent = "Balance: " + currentbal;
})

addButton.addEventListener('click', () => {
    console.log("Expense added!");
    const reasonEntered = reasonInput.value;
    const amountEntered = amountInput.value;
    const ItemQentered = itemQuantity.value;
    const currentbal = balance.value;
    

    if (reasonEntered.trim().length <= 0 || amountEntered <= 0 ||
        amountEntered.trim().length <= 0){
            alert("Please input reason and amount!")
           
            return;
        }
   
        console.log(reasonEntered, amountEntered, ItemQentered);

        finalamount = amountEntered * ItemQentered;
 

        
        const newExpenses = document.createElement('ion-item');
        newExpenses.textContent = reasonEntered + ': P' + finalamount;
        expensesList.appendChild(newExpenses);

       
        myTotalExpenses += +finalamount;
        finalbal = currentbal - myTotalExpenses;

        totalExpensesOutput.textContent = myTotalExpenses;
        curBalance.textContent = "Balance: " + finalbal;
        clear();
});

*/