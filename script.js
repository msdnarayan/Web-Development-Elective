// Function to display a custom message
function displayMessage() {
    alert("Hello, welcome to my page!");
  }
  
  // Change background color when hovering over the profile picture
  const profilePic = document.getElementById('profile-pic');
  profilePic.addEventListener('mouseenter', function() {
    document.body.style.backgroundColor = '#e6ffe6';
  });
  profilePic.addEventListener('mouseleave', function() {
    document.body.style.backgroundColor = '#f0f8ff';
  });
  