document.addEventListener('DOMContentLoaded', function() {
    // Select all buttons with the class 'button2'
    let buttons = document.querySelectorAll('.button2');

    // Iterate over each button
    buttons.forEach(function(btn) {
        // Add click event listener to each button
        btn.addEventListener('click', function() {
            console.log("Button clicked");
            btn.classList.toggle('on');

            // Find the parent switch container
            let switchContainer = btn.closest('.switch');
            console.log("Switch container:", switchContainer);

            // Find the associated status image element
            let statusImg = switchContainer.parentElement.previousElementSibling.querySelector('.status-image');
            console.log("Status image:", statusImg);

            // If the button is on, set the status image to green, otherwise set it to red
            if (btn.classList.contains('on')) {
                statusImg.src = 'images/green.png';
            } else {
                statusImg.src = 'images/red.png';
            }
        });

        // Trigger click event to initially set the status image based on the initial state of the switch
        btn.dispatchEvent(new Event('click'));
    });
});