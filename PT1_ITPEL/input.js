var ename = document.querySelector('#name');
var hoursWork = document.querySelector('#hWork');
var rateHour = document.querySelector('#rHour');
var Calc = document.querySelector('#Calculate');
var clear = document.querySelector('#reset')

var hworkValue = hoursWork.value;

var salary = hworkValue;
const removed = () =>{
    ename.value = '';
    hoursWork.value =  '';
    rateHour.value = '';
}
clear.addEventListener('click', removed);

Calc.addEventListener('click', () => {
    var nameValue = ename.value;
    var hworkValue = hoursWork.value;
    var rhourValue = rateHour.value;
    var salary = hworkValue * rhourValue;
    var tax = 0; 
    if (salary > 50000){
        tax = 0.25;
    }
    if (salary < 50000){
        tax = 0.15;
    }
    var final = salary - (tax * salary);
    console.log(final, nameValue, tax);
    alert(
    "Name: " + nameValue + "\n" +  
    "Tax: " + tax * 100 + "% "+"\n" + 
    "Gross Pay: " + final + "\n" +
    "The Calculation used are from Web Dev OE3 :D"
    );
})