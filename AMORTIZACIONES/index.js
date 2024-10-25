// OBtener elementos de DOM

const form = document.querySelector('form');
const tableBody = document.getElementById('table-body');

form.addEventListener('submit', function(event)
{
    event.preventDefault();
    const loanAmount = parseFloat(document.getElementById('loan-amount'), value);
    const interestRate = parseFloat(document.getElementById('interest-rate'), value) / 100;
    const loanTerm = parseFloat(document.getElementById('loan-term'), value) * 12;
    const playment = calculatePayment(loanAmount, interestRate, loanTerm);
    tableBody.innerHTML = '';

    for (let i = 0; i < loanTerm; i++)
    {
        const row = document.createElement('tr');
        const initialBalance = loanAmount * (1 + interestRate) ** (i - 1);
        const interest = initialBalance * interestRate;
        const principal = payment - interest;
        const balance = initialBalance - principal;
        const year = Math.ceil(i/12);
        row.innerHTML
    } 
}
)