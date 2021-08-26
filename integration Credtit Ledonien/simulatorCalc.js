let fieldAmount=document.getElementById("amount");
let fieldMonthlyPayments=document.getElementById("monthlyPayments");
let fieldTime=document.getElementById("time");
let valueAmount=valueMonthlyPayments=valueTime=0;

        document.getElementById("amount").addEventListener("keyup",  function (){
            valueAmount=fieldAmount.value;
            console.log("amount "+valueAmount);
        });

        document.getElementById("monthlyPayments").addEventListener("keyup",  function (){
            valueMonthlyPayments=fieldMonthlyPayments.value;
            console.log("monthlyPayments "+valueMonthlyPayments);
        });
        
        document.getElementById("time").addEventListener("keyup",  function (){
            valueTime=fieldTime.value;
            console.log("time "+valueTime);
        });