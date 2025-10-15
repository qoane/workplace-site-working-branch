document.addEventListener('DOMContentLoaded', () => {
  const editorElements = document.querySelectorAll('.wysiwyg');

  if (!editorElements.length || typeof window.ClassicEditor === 'undefined') {
    return;
  }

  editorElements.forEach((element) => {
    window.ClassicEditor.create(element, {
      toolbar: {
        items: [
          'heading',
          '|',
          'bold',
          'italic',
          'underline',
          'strikethrough',
          'link',
          'bulletedList',
          'numberedList',
          '|',
          'outdent',
          'indent',
          '|',
          'blockQuote',
          'insertTable',
          'mediaEmbed',
          'code',
          'codeBlock',
          'horizontalLine',
          'removeFormat',
          '|',
          'undo',
          'redo',
        ],
        shouldNotGroupWhenFull: true,
      },
      list: {
        properties: {
          styles: true,
          startIndex: true,
          reversed: true,
        },
      },
      heading: {
        options: [
          { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
          { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
          { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
          { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
          { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
        ],
      },
      link: {
        addTargetToExternalLinks: true,
        decorators: {
          toggleDownloadable: {
            mode: 'manual',
            label: 'Downloadable',
            attributes: {
              download: 'file',
            },
          },
        },
      },
      table: {
        contentToolbar: [
          'tableColumn',
          'tableRow',
          'mergeTableCells',
          'tableProperties',
          'tableCellProperties',
        ],
      },
      removePlugins: [
        'AIAssistant',
        'CKBox',
        'CKFinder',
        'EasyImage',
        'ExportPdf',
        'ExportWord',
        'ImportWord',
        'ImportPdf',
        'RealTimeCollaborativeComments',
        'RealTimeCollaborativeTrackChanges',
        'RealTimeCollaborativeRevisionHistory',
        'PresenceList',
        'Comments',
        'TrackChanges',
        'TrackChangesData',
        'RevisionHistory',
        'Pagination',
        'WProofreader',
        'MathType',
      ],
    })
      .then((editor) => {
        editor.editing.view.change((writer) => {
          writer.setStyle('min-height', '600px', editor.editing.view.document.getRoot());
        });
      })
      .catch((error) => {
        console.error('Error initializing the rich text editor', error);
      });
  });
});
