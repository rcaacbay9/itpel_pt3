const reasonInput = document.querySelector('#input-reason');
const amountInput = document.querySelector('#input-amount');
const itemQuantity = document.querySelector('#item-quantity');
const cancelButton = document.querySelector('#btn-clear');
const addButton = document.querySelector('#btn-add');
const expensesList = document.querySelector('#expenses-list');
const totalExpensesOutput = document.querySelector('#total-expenses');
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

