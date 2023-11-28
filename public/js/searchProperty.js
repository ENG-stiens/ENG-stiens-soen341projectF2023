// function to display property information
function displayPropertyInfo(propertyData) {
    const propertyInfoContainer = document.querySelector('.propertyInfo'); // uses the class declared above
    propertyInfoContainer.innerHTML = '';

    // wrappers are used for styling the display of the content
    const wrapper = document.createElement('div');
    wrapper.classList.add('labelsInfo');

    // display info
    const propertyAddress = createInfoElement('Address:', propertyData.address);
    const propertyAgency = createInfoElement('Agency:', propertyData.agency);
    const propertyPhone = createInfoElement('Phone:', propertyData.phone);
    const propertyDescription = createInfoElement('Description:', propertyData.description);
    const propertyPrice = createInfoElement('Price:', propertyData.price);
    const propertyAmenities = createInfoElement('Amenities:', propertyData.amenities); // Corrected typo

    // send info to website page
    wrapper.appendChild(propertyAddress);
    wrapper.appendChild(propertyAgency);
    wrapper.appendChild(propertyPhone);
    wrapper.appendChild(propertyDescription);
    wrapper.appendChild(propertyPrice);
    wrapper.appendChild(propertyAmenities); // Corrected variable name
    propertyInfoContainer.appendChild(wrapper); // Corrected variable name
}

// function to create a box to display the information of property
// less repetitive code
function createInfoElement(label, value) {
    const infoElement = document.createElement('div');
    infoElement.innerHTML = `
        <p>${label}</p>
        <div class="infoBox">${value}</div>
    `;
    // returns filled out information
    return infoElement;
}

// form submission
// test data
function searchProperty() {
    // test
    const mockPropertyData = {
        address: '10 Greendale',
        agency: 'ABC Realty',
        phone: '123-456-7890',
        description: 'Beautiful Single Family Home',
        price: '$500,000',
        amenities: 'Spacious backyard, modern kitchen, garage', // Corrected variable name
    };

    // display data
    displayPropertyInfo(mockPropertyData);
}

// Calling the searchProperty function to test
searchProperty();
