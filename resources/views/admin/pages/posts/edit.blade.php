@extends('admin.layouts.main')

@push('css')
<!-- SimpleMDE css -->
  <link rel="stylesheet" href="{{asset('plugins/rte_theme_default.css')}}" />
@endpush

@section('title', 'Довавить меню')




@section('content')                                                 
               


<div class="content-page">
  <div class="content">
      <!-- Start Content-->
      <div class="container-fluid">

          <!-- start page title -->
          <div class="row mb-3">
            <div class="col-12">
              <div class="card-block p-3 mt-3" style="background: #fff" >
                <div class="card-body d-flex justify-content-between align-items-center">
                  <h4 class="card-title">Бетти өзгертиў</h4>
                  <a href="{{route('dashboard.pages.index')}}" class="card-button btn btn-primary">Артқа қайтыў</a>
                </div>
              </div>
            </div>
        </div>
          
        
    <form action="{{route('dashboard.post.update',$post->id)}}" method="POST" enctype="multipart/form-data" class="container-fluid">
      <div class="row mt-3">
        
        <div class="container-fluid col-9">
          
          <div class="card-block p-3" style="background: #fff" >
                @csrf
                <ul class="nav nav-tabs nav-bordered mb-3">
                  @foreach (config('app.available_locales') as $local)
                  <li class="nav-item">
                      <a href="#item_{{$local['lang']}}" data-bs-toggle="tab" aria-expanded="false" class="nav-link <?=($local['lang']=='ru' ? 'active' : '')?>">
                          <i class="mdi mdi-home-variant d-md-none d-block"></i>
                          <?php 
                              $img='files/flags/'.$local['lang'].'.png';
                            ?>
                            <span class="d-flex align-items-center justify-content-center"><img src="{{asset($img)}}" alt="">{{$local['title']}}</span>
                      </a>
                  </li>
                  @endforeach
                </ul>
              
                <div class="tab-content">
                    @foreach (config('app.available_locales') as $local)
                      <div class="tab-pane  <?=($local['lang']=='ru' ? 'show active' : '')?>" id="item_{{$local['lang']}}">
                        <div class="mb-3">
                          <label for="simpleinput" class="form-label">{{$local['heading']}}</label>
                          <?php
                          $title='title_'.$local['lang'];
                          $body='body_'.$local['lang'];
                          ?>
                          <input type="text" value="{{$post->$title}}" name="title_{{$local['lang']}}" id="simpleinput" class="form-control">
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <label for="body">{{$local['body']}}</label>
                                <textarea class="form-control" id="editor_{{$local['lang']}}" name="body_{{$local['lang']}}" rows="10" placeholder="Введите текст">{{$post->$body}}</textarea>
                            </div>
                        </div>
                      </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-end">
                  <button class="btn btn-primary mt-3 " type="submit" id="save">Өзгертиў</button>
                </div>
          </div>
      </div>
        <div class="container-fluid col-3" style="background: #fff" >
          <div class="card-block p-3">                                    
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                          aria-expanded="true" aria-controls="collapseOne">
                          Изображение статьи
                      </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <img src="{{asset('files/no-image.jpg')}}" class="img-uploaded mb-2" style="display: block; width: 200px">
                        <input type="file" name="image" class="form-control" value="">
                        
                        {{-- <img src="" class="img-uploaded mb-2" style="display: block; width: 200px">
                        <input type="text" class="form-control" id="image" name="image" value=""
                            readonly>
                        <a href="" class="btn btn-secondary mt-3 rounded-0 popup_selector" data-inputid="image"><i class="fa fa-images"></i> Выбрать</a> --}}
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </form>
              

    </div> <!-- container -->

  </div> <!-- content -->
</div>

         
@endsection

@push('js')
    

<script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/super-build/ckeditor.js"></script>
<script>
  // This sample still does not showcase all CKEditor&nbsp;5 features (!)
  // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
  const langs = ['ru', 'uz', 'qr'];
  langs.forEach(element => {
    lang="editor_"+element
    CKEDITOR.ClassicEditor.create(document.getElementById(lang), {
        // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
        toolbar: {
            items: [
                'exportPDF','exportWord', '|',
                'findAndReplace', 'selectAll', '|',
                'heading', '|',
                'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                'bulletedList', 'numberedList', 'todoList', '|',
                'outdent', 'indent', '|',
                'undo', 'redo',
                '-',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                'alignment', '|',
                'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                'textPartLanguage', '|',
                'sourceEditing'
            ],
            shouldNotGroupWhenFull: true
        },
        // Changing the language of the interface requires loading the language file using the <script> tag.
        // language: 'es',
        list: {
            properties: {
                styles: true,
                startIndex: true,
                reversed: true
            }
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
            ]
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
        fontFamily: {
            options: [
                'default',
                'Arial, Helvetica, sans-serif',
                'Courier New, Courier, monospace',
                'Georgia, serif',
                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                'Tahoma, Geneva, sans-serif',
                'Times New Roman, Times, serif',
                'Trebuchet MS, Helvetica, sans-serif',
                'Verdana, Geneva, sans-serif'
            ],
            supportAllValues: true
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
        fontSize: {
            options: [ 10, 12, 14, 'default', 18, 20, 22 ],
            supportAllValues: true
        },
        // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
        // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
        htmlSupport: {
            allow: [
                {
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }
            ]
        },
        // Be careful with enabling previews
        // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
        htmlEmbed: {
            showPreviews: true
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
        link: {
            decorators: {
                addTargetToExternalLinks: true,
                defaultProtocol: 'https://',
                toggleDownloadable: {
                    mode: 'manual',
                    label: 'Downloadable',
                    attributes: {
                        download: 'file'
                    }
                }
            }
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
        mention: {
            feeds: [
                {
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }
            ]
        },
        // The "superbuild" contains more premium features that require additional configuration, disable them below.
        // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
        removePlugins: [
            // These two are commercial, but you can try them out without registering to a trial.
            // 'ExportPdf',
            // 'ExportWord',
            'AIAssistant',
            'CKBox',
            'CKFinder',
            'EasyImage',
            // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
            // Storing images as Base64 is usually a very bad idea.
            // Replace it on production website with other solutions:
            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
            // 'Base64UploadAdapter',
            'MultiLevelList',
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
            // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
            // from a local file system (file://) - load this site via HTTP server if you enable MathType.
            'MathType',
            // The following features are part of the Productivity Pack and require additional license.
            'SlashCommand',
            'Template',
            'DocumentOutline',
            'FormatPainter',
            'TableOfContents',
            'PasteFromOfficeEnhanced',
            'CaseChange'
        ]
    });
  });
  
  $("form").submit(function () {
      $("#save").attr("disabled", true);
  });
</script>


    {{-- <script type="text/javascript" src="{{asset('plugins/rte.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/all_plugins.js')}}"></script> --}}
    {{-- <script src="https://cdn.tiny.cloud/1/7kzq84ravlgxb4rhlljxkbzo76nd9s6z3vh0pmzr1gyr5zc8/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript" src="{{ asset('packages/barryvdh/elfinder/js/standalonepopup.js') }}"></script>
    <script src="/path/or/uri/to/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('admin/js/jquery.colorbox-min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#body_uz',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            file_picker_callback: elFinderBrowser
        });
        tinymce.init({
            selector: '#body_ru',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            file_picker_callback: elFinderBrowser
        });
        tinymce.init({
            selector: '#body_qr',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            file_picker_callback: elFinderBrowser
        });

        var elfinder_url = '/elfinder/tinymce5';
        
          function elFinderBrowser (callback, value, meta) {
      tinymce.activeEditor.windowManager.openUrl({
          title: 'File Manager',
          url: elfinder_url,
          /**
           * On message will be triggered by the child window
           * 
           * @param dialogApi
           * @param details
           * @see https://www.tiny.cloud/docs/ui-components/urldialog/#configurationoptions
           */
          onMessage: function (dialogApi, details) {
              if (details.mceAction === 'fileSelected') {
                  const file = details.data.file;
                  
                  // Make file info
                  const info = file.name;
                  
                  // Provide file and text for the link dialog
                  if (meta.filetype === 'file') {
                      callback(file.url, {text: info, title: info});
                  }
                  
                  // Provide image and alt text for the image dialog
                  if (meta.filetype === 'image') {
                      callback(file.url, {alt: info});
                  }
                  
                  // Provide alternative source and posted for the media dialog
                  if (meta.filetype === 'media') {
                      callback(file.url);
                  }
                  
                  dialogApi.close();
              }
          }
      });
      }
        
    </script> --}}
@endpush
