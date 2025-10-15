document.addEventListener('DOMContentLoaded', () => {
  const editorElements = document.querySelectorAll('.wysiwyg');
  if (editorElements.length && window.tinymce) {
    tinymce.init({
      selector: '.wysiwyg',
      height: 600,
      plugins: 'link lists code table image media autoresize',
      toolbar:
        'undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | link table | code',
      menubar: 'file edit view insert format tools table help',
      branding: false,
      relative_urls: false,
      remove_script_host: false,
      convert_urls: false,
    });
  }
});
