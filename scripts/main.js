document.addEventListener('DOMContentLoaded', function() {
    const productoItems = document.querySelectorAll('.producto-item');
  
    productoItems.forEach(item => {
      item.addEventListener('click', function(e) {
        // Oculta todos los content-div
        productoItems.forEach(i => i.classList.remove('active'));
  
        // Muestra el content-div del elemento clicado
        item.classList.add('active');
      });
  
      // Mantén visible el content-div mientras el ratón esté sobre él
      item.addEventListener('mouseenter', function() {
        if (!item.classList.contains('active')) {
          item.classList.add('hover');
        }
      });
  
      item.addEventListener('mouseleave', function() {
        if (item.classList.contains('hover')) {
          item.classList.remove('hover');
        }
      });
  
      const contentDiv = item.querySelector('.content-div');
      contentDiv.addEventListener('mouseenter', function() {
        item.classList.add('active');
      });
  
      contentDiv.addEventListener('mouseleave', function() {
        item.classList.remove('active');
      });
    });
  });