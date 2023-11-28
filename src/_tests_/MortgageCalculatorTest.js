//Test for mortgage calculator
// Mock document.getElementById
document.getElementById = jest.fn((id) => {
    if (id === "homePrice" || id === "downPayment" || id === "loanTerm" || id === "interestRate") {
        return { value: '' };
    } else if (id === "result") {
        return { innerHTML: '' };
    }
});

// Mock window.alert
window.alert = jest.fn();

// Test cases
describe('Calculate Mortgage', () => {
    test('it should calculate mortgage payment correctly', () => {
        // Mock user input
        document.getElementById.mockReturnValueOnce({ value: '300000' }); // Mock homePrice
        document.getElementById.mockReturnValueOnce({ value: '60000' });  // Mock downPayment
        document.getElementById.mockReturnValueOnce({ value: '30' });      // Mock loanTerm
        document.getElementById.mockReturnValueOnce({ value: '4' });       // Mock interestRate

        calculateMortgage();

        const resultContainer = document.getElementById("result");
        expect(resultContainer.innerHTML).toBe("Monthly Mortgage Payment: $1,145.80");
    });

    test('it should handle invalid input', () => {
        // Mock invalid user input
        document.getElementById.mockReturnValueOnce({ value: 'invalid' }); // Mock homePrice

        calculateMortgage();

        // Ensure alert is called
        expect(window.alert).toHaveBeenCalledWith("Please enter valid numerical values.");
    });
});
