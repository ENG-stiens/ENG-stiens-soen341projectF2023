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
    const infoElement = do
