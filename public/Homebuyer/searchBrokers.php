<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <title>Search Brokers</title>
</head>
<body>

<?php
include 'header.html';
include 'sidenav.html';
?>

<!-----------------------------------------------------HTML for Search Brokers ----------------------------------->

<div class="container">
    <h1> Search Brokers </h1>

    <!-- search bar -->
    <div class="search-container">
        <!-- add the back-end /searchBrokers method (read brokers database)
         it would be nice to have suggestions pop up when the user types, but its not necessary because it can be complicated-->
        <form action="/searchBrokers" method="get" class="searchBar_brokers">
            <input type="text" name="search" id="search" placeholder="Search Brokers">
            <div id="search-suggestions" class="suggestions"></div>
        </form>
    </div>

    <br><br>

    <!-- container to show broker information-->
    <div class="brokerInfo"></div>
    <br><br>

    <!-- constainer to show information for the properties owned by the broker-->
    <div class="propertyList"></div>

</div>



<script>
    // function to display broker information
    function displayBrokerInfo(brokerData) {
        const brokerInfoContainer = document.querySelector('.brokerInfo'); // uses the class declared above
        brokerInfoContainer.innerHTML = '';

        // wrappers are used for styling the display of the content
        const wrapper = document.createElement('div');
        wrapper.classList.add('labelsInfo');

        // display name and last name
        const brokerName = createInfoElement('Name:', brokerData.name);
        const brokerLastName = createInfoElement('Last Name:', brokerData.lastName);

        // send info to website page
        wrapper.appendChild(brokerName);
        wrapper.appendChild(brokerLastName);
        brokerInfoContainer.appendChild(wrapper);


        const licenseAgencyWrapper = document.createElement('div');
        licenseAgencyWrapper.classList.add('labelsInfo');

        // display license number and agency
        const brokerLicense = createInfoElement('License Number:', brokerData.license);
        const brokerAgency = createInfoElement('Agency:', brokerData.agency);

        // send info to website page
        licenseAgencyWrapper.appendChild(brokerLicense);
        licenseAgencyWrapper.appendChild(brokerAgency);
        brokerInfoContainer.appendChild(licenseAgencyWrapper);


        const phoneEmailWrapper = document.createElement('div');
        phoneEmailWrapper.classList.add('labelsInfo');

        // display phone number and email
        const brokerPhone = createInfoElement('Phone Number:', brokerData.phone);
        const brokerEmail = createInfoElement('Email:', brokerData.email);

        // send info to website page
        phoneEmailWrapper.appendChild(brokerPhone);
        phoneEmailWrapper.appendChild(brokerEmail);
        brokerInfoContainer.appendChild(phoneEmailWrapper);
    }

    // function to create a box to diplay the information of broker
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

    // function the properties owned by the broker
    function displayProperties(properties) {

        const propertyListContainer = document.querySelector('.propertyList'); // uses class declared on top
        propertyListContainer.innerHTML = '';

        properties.forEach(property => { // reads each property and displays

            const propertyElement = document.createElement('div');
            propertyElement.classList.add('property');

            // add image
            const propertyImage = document.createElement('img');
            propertyImage.src = property.image;
            propertyImage.alt = 'property image';
            // send image
            propertyElement.appendChild(propertyImage);

            // create a div for property details
            const propertyDetails = document.createElement('div');
            propertyDetails.classList.add('property-details');

            // display price
            const propertyPrice = document.createElement('div');
            propertyPrice.innerHTML = `<p>Price: ${property.price}</p>`;
            propertyDetails.appendChild(propertyPrice);

            // display address
            const propertyAddress = document.createElement('div');
            propertyAddress.innerHTML = `<p>Address: ${property.address}</p>`;
            propertyDetails.appendChild(propertyAddress);

            // display rooms
            const propertyRooms = document.createElement('div');
            propertyRooms.innerHTML = `<p>Rooms: ${property.rooms}</p>`;
            propertyDetails.appendChild(propertyRooms);

            // display bathrooms
            const propertyBathrooms = document.createElement('div');
            propertyBathrooms.innerHTML = `<p>Bathrooms: ${property.bathrooms}</p>`;
            propertyDetails.appendChild(propertyBathrooms);

            // send all info to website
            propertyElement.appendChild(propertyDetails);
            propertyListContainer.appendChild(propertyElement);
        });
    }


    //form submission
    // this is test data, I hard coded it for front-end testing
    // this part will need to fetch data from the database depending on what the user types
    // this is to be removed
    function searchBrokers() {
        // test
        const mockBrokerData = {
            name: 'Asha',
            lastName: 'Paris',
            license: '155464',
            agency: 'Remax',
            phone: '514-342-5723',
            email: 'asha.paris@gmail.com'
        };

        // test data for properties owned by the broker
        // this part is also to be removed
        // not sure how to code the back-end
        // will need to fetch data form the properties database and get information on the properties owned by the searched broker
        const mockProperties = [
            { image: '10Greendale.jpg', price: '123 443$', address: '12 Sunshine Street', rooms: '2', bathrooms: '2' },
            { image: '67Grand.jpg', price: '100 000$', address: '67 St-Laurent', rooms: '5', bathrooms: '2' },
        ];

        // display data
        displayBrokerInfo(mockBrokerData);
        displayProperties(mockProperties);
    }


    // searchBrokers function
    // this will show asha paris by default
    // this needs to change
    const searchForm = document.querySelector('.searchBar_brokers');
    searchForm.addEventListener('submit', event => {
        event.preventDefault();
        searchBrokers();
    });

</script>

</body>
</html>