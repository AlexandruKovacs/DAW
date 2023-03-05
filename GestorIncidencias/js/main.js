const elements = $('body, input, select, textarea, .nav-bar, .crear-incidencia, .listar-incidencias, .form-container, table th, table tr, .navegacion');

const cambioTema = $('#tema');
const temaActual = localStorage.getItem('tema');

elements.addClass(temaActual === 'dark' ? 'dark-theme' : '');

cambioTema.prop('checked', temaActual === 'dark');

cambioTema.on('change', function() {

  const tema = $(this).prop('checked') ? 'dark' : 'light';
  localStorage.setItem('tema', tema);
  elements.toggleClass('dark-theme', tema === 'dark');

});
