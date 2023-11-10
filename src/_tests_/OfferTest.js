import { includeHTML, handleFormSubmit } from './offer.html';

describe('handleFormSubmit', () => {
    it('should submit the form and update the message', () => {
        document.body.innerHTML = `
      <form id="offer">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="phone">Phone Number:</label><br>
            <input type="text" id="phone" name="phone" required><br><br>

            <label for="address">Property Address:</label><br>
            <input type="text" id="address" name="address" required><br><br>

            <label for="offer">Your Offer ($):</label><br>
            <input type="number" id="offer" name="offer" required><br><br>

            <input type="submit" value="Book Appointment">
      </form>
      <div id="message"></div>
    `;
        fetch.mockResponseOnce(JSON.stringify({ message: 'Success' }));

        const form = document.getElementById('offer');
        const event = new Event('submit');
        form.dispatchEvent(event);

        expect(document.getElementById('message').textContent).toBe('Success');
    });
});

beforeAll(() => {
    global.fetch = jest.fn();
});

afterAll(() => {
    global.fetch.mockClear();
    delete global.fetch;
});
