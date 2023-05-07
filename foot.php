
<footer>
  <div class="footer-images">
  <img src="slike/SSGO_page-0001.png" alt="Your logo" data-color="#a6ce39">
  <img src="slike/ERS_page-0001.png" alt="Your logo" data-color="#0096db">
  <img src="slike/SSD_page-0001.jpg" alt="Your logo" data-color="#f359a1">
  <img src="slike/GIM_page-0001.jpg" alt="Your logo" data-color="#fece00">
  </div>
</footer>
<script>
const images = document.querySelectorAll('.footer-images img');
const header = document.querySelector('header');
const login = document.querySelector('#log')

// Define a color-ID mapping
const colorIds = {
  "#a6ce39": 4,
  "#0096db": 1,
  "#f359a1": 3,
  "#fece00": 2
};
images.forEach(image => {
  image.addEventListener('click', () => {
    const color = image.getAttribute('data-color');
    header.style.backgroundColor = color;
    //login.style.backgroundColor = color;

     // Get the ID corresponding to the selected color
     const id = colorIds[color];
    
    // Add an AJAX request to update the session variable
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'update_session.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(`sola_id=${id}`);


  });
});
</script>
</body>
</html>