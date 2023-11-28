// Unit test for search properties

// function to display property information
function displayPropertyInfo(propertyData) {
    const propertyInfoContainer = document.querySelector('.propertyInfo');
    propertyInfoContainer.innerHTML = '';

    const wrapper = document.createElement('div');
    wrapper.classList.add('labelsInfo');

    const propertyAddress = createInfoElement('Address:', propertyData.address);
    const propertyAgency = createInfoElement('Agency:', propertyData.agency);
    const propertyPhone = createInfoElement('Phone:', propertyData.phone);
    const propertyDescription = createInfoElement('Description:', propertyData.description);
    const propertyPrice = createInfoElement('Price:', propertyData.price);
    const propertyAmenities = createInfoElement('Amenities:', propertyData.amenities);

    wrapper.appendChild(propertyAddress);
    wrapper.appendChild(propertyAgency);
    wrapper.appendChild(propertyPhone);
    wrapper.appendChild(propertyDescription);
    wrapper.appendChild(propertyPrice);
    wrapper.appendChild(propertyAmenities);
    propertyInfoContainer.appendChild(wrapper);

    const InfoWrapper = document.createElement('div');
    InfoWrapper.classList.add('labelsInfo');
}

// function to create a box to display the information of property
function createInfoElement(label, value) {
    const infoElement = document.createElement('div');
    infoElement.innerHTML = `
        <p>${label}</p>
        <div class="infoBox">${value}</div>
    `;
    return infoElement;
}

// form submission
// test data
function searchProperty() {
    const mockPropertyData = {
        address: '10 Greendale',
        agency: 'ABC Realty',
        phone: '123-456-7890',
        description: 'Beautiful Single Family Home',
        price: '$500,000',
        amenities: 'Spacious backyard, modern kitchen, garage',
    };
    
    // display data
    displayPropertyInfo(mockPropertyData);
}

// searchBrokers function
const searchForm = document.querySelector('.searchBar_properties');
searchForm.addEventListener('submit', event => {
    event.preventDefault();
    searchProperty();
});

// To Run the tests:
// Call functions and check the console for the expected output
// For Example:
searchProperty();
