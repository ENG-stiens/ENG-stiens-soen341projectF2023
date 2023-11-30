function includeHTML() {
    const elements = document.querySelectorAll('[include-html]');

    elements.forEach(function (elmnt) {
        const file = elmnt.getAttribute('include-html');
        if (file) {
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        elmnt.innerHTML = this.responseText;

                    
                        const userType = localStorage.getItem('userType');
                        if (userType === 'renter') {
                            const sidenav = elmnt.querySelector('.sidenav');
                            const mortgageLink = sidenav.querySelector('a[href="mortgage.html"]');
                            if (mortgageLink) {
                                mortgageLink.remove();
                            }
                        } else {
                            const mortgageLink = document.createElement('a');
                            mortgageLink.href = 'mortgage.html';
                            mortgageLink.textContent = 'Mortgage Calculator';
                            const sidenav = elmnt.querySelector('.sidenav');
                            sidenav.appendChild(mortgageLink);
                        }
                    }
                    if (this.status == 404) {
                        elmnt.innerHTML = 'Page not found.';
                    }
                }
            };
            xhttp.open('GET', file, true);
            xhttp.send();
        }
    });

    window.setUserType = function (type) {
        localStorage.setItem('userType', type);
        includeHTML();
    };
}
includeHTML();
