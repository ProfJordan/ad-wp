document.addEventListener('DOMContentLoaded', function() {
    // Function to check if the URL contains '/es/'
    function isSpanishURL() {
      return window.location.pathname.includes('/es/');
    }
  
    // Function to hide elements based on URL
    function hideElementsBasedOnURL() {
      const elementsToHide = isSpanishURL() ? document.querySelectorAll('.en') : document.querySelectorAll('.es');
      
      elementsToHide.forEach(element => {
        element.style.display = 'none';
      });
    }
  
    // Call the function when the DOM is fully loaded
    hideElementsBasedOnURL();
  });  