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
                  <h4 class="card-title">Бет қосыў</h4>
                  <a href="{{route('dashboard.pages.create')}}" class="card-button btn btn-primary">Артқа қайтыў</a>
                </div>
              </div>
            </div>
        </div>                      
              
          <div class="card-block p-3" style="background: #fff" >
            <form action="{{ route('dashboard.pages.store') }}" class="form-main" method="POST">
                @csrf
                <div class="row">
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
                
                  <div class="col-md-12">
                    <label for="simpleinput" class="form-label">Ярлык</label>
                    <input placeholder="https://qrqurilis.uz/ярлык" type="text" name="slug" value="{{old('slug')}}" id="simpleinput" class="form-control">
                    <span>«Ярлык» — это вариант названия, подходящий для URL. Обычно содержит только латинские буквы в нижнем регистре, цифры и дефисы.
                    </span>
                  </div>
                           
                  <div class="tab-content">
                    @foreach (config('app.available_locales') as $local)
                      <div class="tab-pane mt-2   <?=($local['lang']=='ru' ? 'show active' : '')?>" id="item_{{$local['lang']}}">
                        <div class="col-md-12">
                          <label for="simpleinput" class="form-label">{{$local['heading']}}</label>
                          <?php
                          $title='title_'.$local['lang'];
                          ?>
                          <input placeholder="{{$local['heading']}}" type="text" name="title_{{$local['lang']}}" value="{{old('title_'.$local['lang'])}}" id="simpleinput" class="form-control">
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                {{-- <label for="body">{{$local['body']}}</label> --}}
                                <textarea class="form-control" id="editor_{{$local['lang']}}" name="body_{{$local['lang']}}" rows="10" placeholder="Введите текст" value={{old('body_'.$local['lang'])}}></textarea>
                            </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
                

                  {{-- <a class="w-100 btn btn-success add-more-btn">Add</a> --}}
                  <div class="row">
                      <div class="col-12 mt-3">
                          <button class="btn btn-primary" type="submit" id="save">Қосыў</button>
                      </div>
                  </div>
            </form>
          </div>

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
@endpush
