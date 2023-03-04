const themeToggle = $('#theme-checkbox');
const body = $('body');

const savedTheme = localStorage.getItem('theme');

if (savedTheme === 'dark') {
  body.addClass('dark-theme');
  themeToggle.prop('checked', true);

} else {
  body.removeClass('dark-theme');
  themeToggle.prop('checked', false);

}

themeToggle.on('change', function() {

  if ($(this).prop('checked')) {
    localStorage.setItem('theme', 'dark');
    body.addClass('dark-theme');

  } else {
    localStorage.setItem('theme', 'light');
    body.removeClass('dark-theme');

  }
});