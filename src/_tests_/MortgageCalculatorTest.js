// Define a function to simulate user input
function simulateUserInput(homePrice, downPayment, loanTerm, interestRate) {
    document.getElementById("homePrice").value = homePrice;
    document.getElementById("downPayment").value = downPayment;
    document.getElementById("loanTerm").value = loanTerm;
    document.getElementById("interestRate").value = interestRate;
}

// Define a function to reset the input values
function resetInputs() {
    document.getElementById("homePrice").value = "";
    document.getElementById("downPayment").value = "";
    document.getElementById("loanTerm").value = "";
    document.getElementById("interestRate").value = "";
}

// Define a function to test the calculateMortgage function
function testCalculateMortgage() {
    // Test Case 1: Valid input
    simulateUserInput(300000, 60000, 30, 4);
    calculateMortgage();
    let result1 = document.getElementById("result").innerHTML;
    console.assert(result1 === "Monthly Mortgage Payment: $1,145.80", "Test Case 1 Failed");

    // Test Case 2: Invalid input (NaN)
    resetInputs();
    simulateUserInput("invalid", 60000, 30, 4);
    calculateMortgage();
    let result2 = document.getElementById("result").innerHTML;
    console.assert(result2 === "", "Test Case 2 Failed");
}

// Run the tests
testCalculateMortgage();
