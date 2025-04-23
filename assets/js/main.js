(function () {
    // Ensure the DOM is fully loaded before executing scripts.
    document.addEventListener('DOMContentLoaded', function () {
      // Example: Mobile menu toggle functionality.
      // Look for a custom toggle button (you might add one manually or via a block customization).
      var menuToggle = document.querySelector('.menu-toggle');
      var navigation = document.querySelector('.primary-navigation');
  
      if (menuToggle && navigation) {
        menuToggle.addEventListener('click', function () {
          navigation.classList.toggle('open');
        });
      }
  
      // Additional interactive functionalities can be initialized here.
      console.log("Your Block Theme JS Loaded.");
    });
  })();
  