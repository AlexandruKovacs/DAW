// Obtener el checkbox del tema y el body
const themeToggle = $('#theme-checkbox');
const body = $('body');

// Comprobar si el usuario ha seleccionado previamente el tema
const savedTheme = localStorage.getItem('theme');

if (savedTheme === 'dark') {
  // Si el usuario ha seleccionado el tema oscuro, establecer la clase del body en consecuencia
  body.addClass('dark-theme');
  // Marcar el checkbox como activado
  themeToggle.prop('checked', true);
} else {
  // Si el usuario no ha seleccionado el tema oscuro, establecer la clase del body en consecuencia
  body.removeClass('dark-theme');
  // Marcar el checkbox como desactivado
  themeToggle.prop('checked', false);
}

// Cambiar el tema y guardarlo en localStorage cuando el usuario cambia el checkbox
themeToggle.on('change', function() {
  if ($(this).prop('checked')) {
    // Si el usuario ha activado el checkbox, establecer el tema en oscuro y guardarlo en localStorage
    localStorage.setItem('theme', 'dark');
    body.addClass('dark-theme');
  } else {
    // Si el usuario ha desactivado el checkbox, establecer el tema en claro y guardarlo en localStorage
    localStorage.setItem('theme', 'light');
    body.removeClass('dark-theme');
  }
});