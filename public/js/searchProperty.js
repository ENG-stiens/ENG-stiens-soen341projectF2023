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

    // send info 
    wrapper.appendChild(propertyAddress);
    wrapper.appendChild(propertyAgency);
    propertyInfoContainer.appendChild(wrapper);

    const addressAgencyWrapper = document.createElement('div');
    addressAgencyWrapper.classList.add('labelsInfo');

    
    // display info 
    const propertyPhone = createInfoElement('Phone:', propertyData.phone);
    const propertyDescription = createInfoElement('Description:', propertyData.description);

     // send info to website page
     addressAgencyWrapper.appendChild(propertyPhone);
     addressAgencyWrapper.appendChild(propertyDescription);
     propertyInfoContainer.appendChild(addressAgencyWrapper);

     const phoneEmailWrapper = document.createElement('div');
     phoneEmailWrapper.classList.add('labelsInfo');

    // display info 
    const propertyPrice = createInfoElement('Price:', propertyData.price);
    const propertyAmenities = createInfoElement('Amenities:', propertyData.amenities); 

    // send info to website page
    phoneEmailWrapper.appendChild(propertyPrice);
    phoneEmailWrapper.appendChild(propertyAmenities);
    propertyInfoContainer.appendChild(phoneEmailWrapper); 
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
    // Get the search input value (you might want to replace this with actual search logic)
    const searchInput = document.getElementById('search').value;

    // Perform search logic based on the search input
    // This is where you should fetch data from your server/database

    // For testing purposes, let's use mock data
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

const searchForm = document.querySelector('.searchBar_brokers');
searchForm.addEventListener('submit', event => {
                                                 event.preventDefault();
                                             searchBrokers();
                                             });