document.addEventListener('DOMContentLoaded', function() {
    function openPopUp() {
        document.getElementById("pop-up").style.display = "flex";
      }
      
      function closePopUp() {
        document.getElementById("pop-up").style.display = "none";
      }
      
      var foto = document.querySelector('.foto');
      var popUp = document.getElementById("pop-up");
      var closeBtn = popUp.querySelector('.close-button');
      
      foto.onclick = openPopUp;
      closeBtn.onclick = closePopUp;
});