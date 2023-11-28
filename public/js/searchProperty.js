
// function to display property information
function displayPropertyInfo(propertyData) {
    const propertyInfoContainer = document.querySelector('.propertyInfo'); // uses the class declared above
    propertyInfoContainer.innerHTML = '';

// wrappers are used for styling the display of the content
    const wrapper = document.createElement('div');
    wrapper.classList.add('labelsInfo');

// display info
    const propertyAddress = createInfoElement('Name:', propertyData.address);
    const propertyAgency = createInfoElement('Name:', propertyData.agency);
    const propertyPhone = createInfoElement('Name:', propertyData.phone);
    const propertyDescription = createInfoElement('Name:', propertyData.description);
    const propertyPrice = createInfoElement('Name:', propertyData.price);
    const propertyAmeneties = createInfoElement('Name:', propertyData.ameneties);


// send info to website page
    wrapper.appendChild(propertyAddress);
    wrapper.appendChild(propertyAgency);
    wrapper.appendChild(propertyPhone);
    wrapper.appendChild(propertyDescription);
    wrapper.appendChild(propertyPrice);
    wrapper.appendChild(propertyAmeneties);
    brokerInfoContainer.appendChild(wrapper);


    const InfoWrapper = document.createElement('div');
    InfoWrapper.classList.add('labelsInfo');



// function to create a box to diplay the information of property
// less repetitve code
function createInfoElement(label, value) {
    const infoElement = document.createElement('div');
    infoElement.innerHTML = `
    <p>${label}</p>
    <div class="infoBox">${value}</div>
    `;
// returns filled out information
    return infoElement;
}


//form submission
// test data
function searchProperty() {
// test
    const mockPropertyData = {
        address: '10 Greendale',
        agency: 'ABC Realty',
        phone: '123-456-7890',
        description: 'Beautiful Single Family Home',
        price: '$500,000',
        ameneties: 'Spacious backyard, modern kitchen, garage',

    };

// display data
    displayPropertyInfo(mockPropertyDataData);
}


// searchBrokers function
// this will show asha paris by default
// this needs to change
const searchForm = document.querySelector('.searchBar_properties');
searchForm.addEventListener('submit', event => {
    event.preventDefault();
    searchProperty();
});}
