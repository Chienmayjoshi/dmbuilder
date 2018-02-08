<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>DM Builder</title>
    <link rel="stylesheet" href="dist/css/grapes.min.css">
    <script src="dist/grapes.min.js"></script>
    <script src="dist/grapesjs-preset-webpage.js"></script>
    <script src="dist/grapesjs-blocks-basic.min.js"></script>
    <!-- <script src="dist/grapesjs-preset-newsletter.min.js"></script> -->
    <style>
      body,
      html {
        height: 100%;
        margin: 0;
      }
    </style>
  </head>

  <body>
    <div id="gjs" style="height:0px; overflow:hidden;">
      <!-- <div class="addSection" data-section-id="quote">show</div> -->
      <!-- <div id="block1" style="background-color: red">myblock</div> -->
      <!--wrapper start-->
        <!-- <div class="main-wrapper clearfix" >
            <h2 class="search-for">Search For:</h2>
            <ul class="ul-block clearfix">
              <li class="li-block clearfix"><a href="#" class="link-block">keyword 1</a><span class="num">1 </span></li>
              <li class="li-block clearfix"><span class="num">3 </span><a href="#" class="link-block">keyword 1</a></li>
              <li class="li-block clearfix"><span class="num">4 </span><a href="#" class="link-block">keyword 1</a></li>
              <li class="li-block clearfix"><span class="num">5 </span><a href="#" class="link-block">keyword 1</a></li>
            </ul>
            <p class="ads">ads</p>
        </div> -->
      <!--wrapper ends-->

<style type="text/css">
*{margin:0; padding:0}
a {text-decoration:none; outline:none}
a img {border:none}
li {list-style:none}
.clear {clear:both; overflow:hidden; line-height:0; font-size:0; height:0}
.clearfix:after{visibility:hidden;display:block;font-size:0;content:" ";clear: both;height:0}
* html .clearfix{zoom:1}
*:first-child+html .clearfix{zoom:1}
a{text-decoration:none}
input{outline:none}
html{height: 100%}

.clearfix:before,
.clearfix:after {
    content: " ";
    display: table;
}

.clearfix:after {
    clear: both;
}

body {background: #ffffff ;font-family: Arial,Helvetica,sans-serif;background-size:cover;-webkit-text-size-adjust:100%;}


.main-wrapper{width: 442px; margin:0px auto 0px; padding: 14px 16px 14px;}
.main-wrapper .li-block{list-style:none; margin-bottom:15px; font-size:23px; color:#545454; background: #fff; border: 1px solid #0097a7; position: relative; font-family: arial, sans-serif;font-weight: 700;}
.main-wrapper .ul-block{width:100%}
.main-wrapper .li-block .num{float:left; padding: 0; position: absolute; top: 50%; margin-top: -16px;  width: 35px; line-height: 33px; text-align: center; color: #333; font-size: 20px; height: 32px; margin-left: 0px; border-right: 1px solid #707070; font-family: Arial, sans-serif; font-weight: 400}
.main-wrapper .link-block{display:block; padding:17px 50px 17px 50px; color:#545454; text-decoration:none; word-wrap:break-word;/*background:  url(arrow.png) no-repeat 96% center;*/ position: relative;}
.main-wrapper .li-block:hover .link-block{/*background: url(arrowh.png) no-repeat 96% center;*/ color: #fff}
.main-wrapper .li-block:hover{color: #fff; background: #0097a7; border-color: transparent;}
.main-wrapper .li-block:hover .num{border-color: #fff; color: #fff}

.search-for{font-size:15px; margin-bottom:12px; font-weight:normal; color:#333; font-family: Arial, sans-serif; width: 100%; text-align: left;}
.ads{font-size: 15px; font-family: Arial, sans-serif; color: #333; width: 100%; text-align: right;}
.no-results {color: #333333;font-size: 14px; margin: 20px auto;text-align: center; width: 90%;}

.custom-msg { background:#fdffec; border-top: 1px solid #ffe594; border-bottom: 1px solid #ffe594; color:#000000; text-align: center; font: 11px/14px Arial, Helvetica, sans-serif; position:absolute; width:100%; top: 0}
.custom-msg a { text-decoration: none; color:#CC0000; font-size: 11px; }
.custom-msg a:hover { text-decoration: underline; }
.nores {text-align:center; word-wrap:break-word; color:#000; font-size:12px; line-height:18px}
.nores span {font-size:14px; font-weight:bold; color:#666}

.top{text-align: left;padding: 6px 0px; margin: 0 auto; background: #3a79be}

#optOutLink {color: #333333; padding: 20px 0;text-shadow:1px 1px 1px #fff;}
#optOutLink a {color: #333333; text-decoration:none;text-shadow:1px 1px 1px #fff;}
#optOutLink a:hover {text-decoration: underline}

/*component blocks css*/
.header{padding: 20px 10px;font-size: 24px;font-weight: bold;background-color: #e5e5e5}

@media not all and (min-width: 767px) {
.main-wrapper .li-block{font-size: 18px; margin-bottom: 9px;}
.main-wrapper .link-block{padding: 14px 50px 14px 35px;background-size: 8px auto !important; }
.main-wrapper{width:95%; padding: 9px 0;} 
.main-wrapper .ul-block, .main-wrapper .ads, .main-wrapper .search-for{width: 90%; margin: 0 auto}
.main-wrapper .search-for{font-size: 13px; margin-bottom: 10px}
.main-wrapper .ads{font-size: 13px}
.main-wrapper .li-block .num{width: 26px; line-height: 27px; height: 26px; font-size: 16px; margin-top: -13px}
}

@media not all and (min-width: 480px) {
body{background-size: 100%;background-attachment: fixed}
.main-wrapper .li-block, .main-wrapper .li-block:hover{font-size: 16px}
}

</style>
    </div>

    <script type="text/javascript">

      //var id = '<?php //echo $this->uri->segment(4); ?>';

      var editor = grapesjs.init({
        protectedCss: '',
        showOffsets: 1,
        noticeOnUnload: 0,
        container: '#gjs',
        storageManager: {
        autosave: false,
        setStepsBeforeSave: 1,
        type: 'remote',
        storeComponents: true,
        storeStyles: true,
        //urlStore: 'http://mmdcdchinmayjo/dmbuilder/dragdrop/add',
        //urlLoad: 'http://mmdcdchinmayjo/dmbuilder/dragdrop/fetch/'+id,
        contentTypeJson: true,
        },
        plugins: ['gjs-blocks-basic','gjs-preset-webpage','gjs-preset-newsletter'],
        pluginsOpts: {
          'gjs-blocks-basic': {
            blocks:['image']
          },
          'gjs-preset-newsletter': {
            modalTitleImport:'material',
          }
        },/*,
        canvas: {
          scripts: ['https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js']
        },*/
        /*script: function () {
          // Do stuff using jquery
          $(".addSection").click(function () {
              //ID of Block we are about to insert to Canvas. (Its a block that already exist)
              var id = $(this).attr('data-section-id');
              // Get the Block using the id.
              var block = blockManager.get('quote');
              alert(block);

              //Add component to wrapper
              editor.addComponents({
                  type: 'div',
                  components: block.attributes.content,
              });
          });
        },*/
        height: '100%',
        fromElement: true,
        storageManager: { autoload: 0 },
        styleManager : {
          sectors: [{
              name: 'General',
              open: false,
              buildProps: ['float', 'display', 'position', 'top', 'right', 'left', 'bottom']
            },{
              name: 'Dimension',
              open: false,
              buildProps: ['width', 'height', 'max-width', 'min-height', 'margin', 'padding'],
            },{
              name: 'Typography',
              open: false,
              buildProps: ['font-family', 'font-size', 'font-weight', 'letter-spacing', 'color', 'line-height', 'text-shadow', 'text-align', 'vertical-align'],
            },{
              name: 'Decorations',
              open: false,
              buildProps: ['border-radius-c', 'background-color', 'border-radius', 'border', 'box-shadow', 'background'],
            }
          ],
        }


      });

      /*editor.runCommand('export-template');*/

      


      //Edit code modal incase you need to make changes to code directly
      var pfx = editor.getConfig().stylePrefix;
      var modal = editor.Modal;
      var cmdm = editor.Commands;
      var codeViewer = editor.CodeManager.getViewer('CodeMirror').clone();
      var pnm = editor.Panels;
      var container = document.createElement('div');
      var btnEdit = document.createElement('button');

      codeViewer.set({
          codeName: 'htmlmixed',
          readOnly: 0,
          theme: 'hopscotch',
          autoBeautify: true,
          autoCloseTags: true,
          autoCloseBrackets: true,
          lineWrapping: true,
          styleActiveLine: true,
          smartIndent: true,
          indentWithTabs: true
      });

      btnEdit.innerHTML = 'Edit';
      btnEdit.className = pfx + 'btn-prim ' + pfx + 'btn-import';
      btnEdit.onclick = function() {
          var code = codeViewer.editor.getValue();
          editor.DomComponents.getWrapper().set('content', '');
          editor.setComponents(code.trim());
          modal.close();
      };

      cmdm.add('html-edit', {
          run: function(editor, sender) {
              sender && sender.set('active', 0);
              var viewer = codeViewer.editor;
              modal.setTitle('Edit code');
              if (!viewer) {
                  var txtarea = document.createElement('textarea');
                  container.appendChild(txtarea);
                  container.appendChild(btnEdit);
                  codeViewer.init(txtarea);
                  viewer = codeViewer.editor;
              }
              var InnerHtml = editor.getHtml();
              var Css = editor.getCss();
              modal.setContent('');
              modal.setContent(container);
              codeViewer.setContent(InnerHtml + "<style>" + Css + '</style>');
              modal.open();
              viewer.refresh();
          }
      });

      pnm.addButton('options',
          [
              {
                  id: 'edit',
                  className: 'fa fa-edit',
                  command: 'html-edit',
                  attributes: {
                      title: 'Edit Code'
                  }
              }
          ]
      );


      //to toggle style manager sections
      const categories = editor.StyleManager.getSectors();
      categories.each(category => {
        category.set('open', false).on('change:open', opened => {
          opened.get('open') && categories.each(category => {
                  category !== opened && category.set('open', false)
              })
        })
      });

      // Open style manager on selecting component
      editor.on('component:selected', () => {
        const openSmBtn = editor.Panels.getButton('views', 'open-sm');
        openSmBtn.set('active', 1);
      });


      var config = editor.getConfig();
      var pfx = editor.getConfig().stylePrefix;
      var modal = editor.Modal;
      var $ = window.$ || grapesjs.$;

      config.showDevices = 0;

      var updateTooltip = function(coll, pos) {
        coll.each(function(item) {
          var attrs = item.get('attributes');
          attrs['data-tooltip-pos'] = pos || 'bottom';
          item.set('attributes', attrs);
        });
      }
      var panelManager = editor.Panels;

      var pnm = editor.Panels;
      /*pnm.addButton('options', [{
        id: 'undo',
        className: 'fa fa-undo icon-undo',
        command: 'undo',
        attributes: { title: 'Undo (CTRL/CMD + Z)'}
      },{
        id: 'redo',
        className: 'fa fa-repeat icon-redo',
        command: 'redo',
        attributes: { title: 'Redo (CTRL/CMD + SHIFT + Z)' }
      },
      {
        id: 'save-db',
        className: 'fa fa-floppy-o',
        command: 'save-db',
        attributes: {title: 'Save DB'}
      }]);*/

      // Add devices buttons
      var panelDevices = pnm.addPanel({id: 'devices-c'});
      var deviceBtns = panelDevices.get('buttons');
      /*deviceBtns.add([{
        id: 'deviceDesktop',
        command: 'set-device-desktop',
        className: 'fa fa-desktop',
        attributes: {'title': 'Desktop'},
        active: 1,
      },{
        id: 'deviceTablet',
        command: 'set-device-tablet',
        className: 'fa fa-tablet',
        attributes: {'title': 'Tablet'},
      },{
        id: 'deviceMobile',
        command: 'set-device-mobile',
        className: 'fa fa-mobile',
        attributes: {'title': 'Mobile'},
      }]);*/

      /****************** COMMANDS *************************/

      var cmdm = editor.Commands;
      cmdm.add('undo', {
        run: function(editor, sender) {
          sender.set('active', 0);
          editor.UndoManager.undo(1);
        }
      });
      cmdm.add('redo', {
        run: function(editor, sender) {
          sender.set('active', 0);
          editor.UndoManager.redo(1);
        }
      });
      cmdm.add('set-device-desktop', {
        run: function(editor) {
          editor.setDevice('Desktop');
        }
      });
      cmdm.add('set-device-tablet', {
        run: function(editor) {
          editor.setDevice('Tablet');
        }
      });
      cmdm.add('set-device-mobile', {
        run: function(editor) {
          editor.setDevice('Mobile portrait');
        }
      });
      cmdm.add('save-db',
      {
          run: function(editor, sender)
          {
            sender && sender.set('active'); // turn off the button
            editor.store();
            
              editor.on('storage:load', function(e) {
                  console.log('Loaded ', e);
            });

            editor.on('storage:store', function(e) {
                  console.log('Stored ', e);
            });         
          }
      });
      
      updateTooltip(deviceBtns);
      updateTooltip(pnm.getPanel('options').get('buttons'));
      updateTooltip(pnm.getPanel('options').get('buttons'));
      updateTooltip(pnm.getPanel('views').get('buttons'));

      /****************** BLOCKS *************************/

      var bm = editor.BlockManager;
      bm.add('link-block', {
        label: 'Link Block',
        attributes: {class:'fa fa-link'},
        category: 'Basic',
        content: {
          type:'link',
          editable: false,
          droppable: true,
          style:{
            display: 'inline-block',
            padding: '5px',
            'min-height': '50px',
            'min-width': '50px'
          }
        },
      });

      bm.add('quote', {
        label: 'Quote',
        category: 'Basic',
        content: '<blockquote class="quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ipsum dolor sit</blockquote>',
        attributes: {class:'fa fa-quote-right addSection'},
        id:'quote',
        draggable:false,
        droppable: false,
      });

      bm.add('text-basic', {
        label: 'Text',
        category: 'Basic',
        content: `
          <span>Sample text</span>`,
        attributes: {class:'gjs-fonts gjs-f-text'}
      });


      bm.add('header', {
        label: 'Header',
        category: 'Sections',
        content: {
            components:[{
                tagName: "div", type: "header", removable: true, draggable: true, droppable:true, copyable: false, classes: ["header"]
            }]
        },
        attributes: {class:'fa fa-header'},
        defaults: {
          draggable: true,
          droppable: true,
        }
      });

      bm.add('links-wrapper', {
        label: 'Container',
        category: 'Sections',
        content: {
            components:[{
                tagName: "div", type: "wrapper", removable: true, draggable: true, droppable:true, copyable: false, classes: ["main-wrapper"]
            }]
        },
        attributes: {class:'gjs-fonts gjs-f-hero'},
        defaults: {
          draggable: true,
          droppable: true,
        },
        
      });

      bm.add('links-list', {
        label: 'keyword List',
        category: 'Sections',
        content: '<ul class="ul-block clearfix">'+
              '<li class="li-block clearfix">'+
              '<a href="#" class="link-block">keyword 1</a>'+
              '<span class="num">1 </span>'+
              '</li>'+
              '</ul>',
        attributes: {class:'fa fa-list-alt'},
        defaults: {
          draggable: true,
          droppable: true,
        }
      });

      bm.add('links-list-item', {
        label: 'List item',
        category: 'Sections',
        content: 
              '<li class="li-block clearfix">'+
              '<a href="#" class="link-block">keyword 1</a>'+
              '<span class="num">1 </span>'+
              '</li>',
        attributes: {class:'fa fa-list-ol'},
        defaults: {
          draggable: true,
          droppable: true,
        }
      });

      bm.add('section-typography', {
        label: 'Text paragraph',
        category: 'Sections',
        content: `<p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>`,
        attributes: {class:'gjs-fonts gjs-f-h1p'}
      });

      

      // Open block manager
      var openBlocksBtn = editor.Panels.getButton('views', 'open-blocks');
      openBlocksBtn && openBlocksBtn.set('active', 1);

      




      /*editor.BlockManager.add('testBlock', {
        label: 'Block',
        attributes: { class:'gjs-fonts gjs-f-b1' },
        content: `<div style="padding-top:50px; padding-bottom:50px; text-align:center">Test block</div>`
      })*/

      /*var undoredopanel = panelManager.addPanel({
       id: 'undoredopanel',
       visible    : true,
       buttons    : [
       { id: "undo", className: "fa fa-undo icon-undo", command: function command(editor, sender) { sender.set("active", 0); editor.UndoManager.undo(1); }, attributes: { title: "Undo" } }
       ,{ id: "redo", className: "fa fa-repeat icon-redo", command: function command(editor, sender) { sender.set("active", 0); editor.UndoManager.redo(1); }, attributes: { title: "Redo" } 
      }],
      });*/

      // Add devices buttons
      /*var panelDevices = panelManager.addPanel({id: 'devices-c'});
      var deviceBtns = panelDevices.get('buttons');
      deviceBtns.add([{
        id: 'deviceDesktop',
        command: 'set-device-desktop',
        className: 'fa fa-desktop',
        attributes: {'title': 'Desktop'},
        active: 1,
      },{
        id: 'deviceTablet',
        command: 'set-device-tablet',
        className: 'fa fa-tablet',
        attributes: {'title': 'Tablet'},
      },{
        id: 'deviceMobile',
        command: 'set-device-mobile',
        className: 'fa fa-mobile',
        attributes: {'title': 'Mobile'},
      }]);*/
      /*updateTooltip(deviceBtns);
      updateTooltip(panelManager.getPanel('options').get('buttons'));
      updateTooltip(panelManager.getPanel('options').get('buttons'));
      updateTooltip(panelManager.getPanel('views').get('buttons'));*/

    </script>
  </body>
</html>
