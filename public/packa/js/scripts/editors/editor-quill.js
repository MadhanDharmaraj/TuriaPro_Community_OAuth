
(function (window, document, $) {
  'use strict';

  var Font = Quill.import('formats/font');
  Font.whitelist = ['sofia', 'slabo', 'roboto', 'inconsolata', 'ubuntu'];
  Quill.register(Font, true);



    // Bubble Editor

  // var bubbleEditor = new Quill('#bubble-container .editor', {
  //   bounds: '#bubble-container .editor',
  //   modules: {
  //     'formula': true,
  //     'syntax': true
  //   },
  //   theme: 'bubble'
  // });

  // // Snow Editor

  // var snowEditor = new Quill('#snow-container .editor', {
  //   bounds: '#snow-container .editor',
  //   modules: {
  //     'formula': true,
  //     'syntax': true,
  //     'toolbar': '#snow-container .quill-toolbar'
  //   },
  //   theme: 'snow'
  // });

  // // Full Editor

  // var fullEditor = new Quill('#full-container .editor', {
  //   bounds: '#full-container .editor',
  //   modules: {
  //     'formula': true,
  //     'syntax': true,
  //     'toolbar': [
  //       [{
  //         'font': []
  //       }, {
  //         'size': []
  //       }],
  //       ['bold', 'italic', 'underline', 'strike'],
  //       [{
  //         'color': []
  //       }, {
  //         'background': []
  //       }],
  //       [{
  //         'script': 'super'
  //       }, {
  //         'script': 'sub'
  //       }],
  //       [{
  //         'header': '1'
  //       }, {
  //         'header': '2'
  //       }, 'blockquote', 'code-block'],
  //       [{
  //         'list': 'ordered'
  //       }, {
  //         'list': 'bullet'
  //       }, {
  //         'indent': '-1'
  //       }, {
  //         'indent': '+1'
  //       }],
  //       ['direction', {
  //         'align': []
  //       }],
  //       ['link', 'image', 'video', 'formula'],
  //       ['clean']
  //     ],
  //   },
  //   theme: 'snow'
  // });


     $('.quill-editor').each(function(i, el) {
        var el = $(this), id = 'quilleditor-' + i, val = el.val(), editor_height = 200;
        var div = $('<div/>').attr('id', id).css('height', editor_height + 'px').html(val);
        el.addClass('d-none');
        el.parent().append(div);

        var quill = new Quill('#' + id, {
            modules: {
                'formula': true,
                'syntax': true,
                'toolbar': [
                  [{
                    'font': []
                  }, {
                    'size': []
                  }],
                  ['bold', 'italic', 'underline', 'strike'],
                  [{
                    'color': []
                  }, {
                    'background': []
                  }],
                  [{
                    'script': 'super'
                  }, {
                    'script': 'sub'
                  }],
                  [{
                    'header': '1'
                  }, {
                    'header': '2'
                  }, 'blockquote', 'code-block'],
                  [{
                    'list': 'ordered'
                  }, {
                    'list': 'bullet'
                  }, {
                    'indent': '-1'
                  }, {
                    'indent': '+1'
                  }],
                  ['direction', {
                    'align': []
                  }],
                  ['link', 'image', 'video', 'formula'],
                  ['clean']
                ],
              },
            theme: 'snow'
        });
        quill.on('text-change', function() {
            el.html(quill.getContents());
        });
    });

 // var editors = [bubbleEditor, snowEditor, fullEditor];

})(window, document, jQuery);
