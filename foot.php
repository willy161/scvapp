
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

images.forEach(image => {
  image.addEventListener('click', () => {
    const color = image.getAttribute('data-color');
    header.style.backgroundColor = color;
  });
});
</script>
</body>
</html>