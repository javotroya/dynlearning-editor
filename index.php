<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Editor de Codigo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/codemirror.min.css">
  <link rel="stylesheet" href="css/cm.material.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include '_inc/header.php'; ?>
<div class="section--main">
  <div class="row">
	  <?php include '_inc/sidebar.php'; ?>
	  <?php include '_inc/editor.php'; ?>
  </div>
</div>
</body>
<!-- Libraries -->
<script type="text/javascript" src="js/vendor/jquery.min.js"></script>
<script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="js/vendor/underscore-min.js"></script>
<script type="text/javascript" src="js/vendor/backbone-min.js"></script>
<script type="text/javascript" src="js/vendor/moment-with-locales.min.js"></script>
<script type="text/javascript" src="js/vendor/uit.js"></script>
<script src="js/vendor/codemirror.min.js"></script>
<script src="js/vendor/cm.xml.min.js"></script>
<script src="js/vendor/cm.htmlmixed.min.js"></script>
<script src="js/vendor/cm.css.min.js"></script>
<script src="js/vendor/cm.js.min.js"></script>
<script src="js/vendor/cm.vbscript.min.js"></script>
<script src="js/vendor/cm.matchbrackes.min.js"></script>
<script src="js/vendor/cm.closebrackets.min.js"></script>
<script src="js/vendor/cm.activeline.js"></script>
<script src="js/vendor/cm.closetag.min.js"></script>
<script src="js/vendor/cm.css-hint.min.js"></script>
<script src="js/vendor/cm.html-hint.min.js"></script>
<script src="js/vendor/cm.js-hint.min.js"></script>
<!-- Application -->
<script type="text/javascript" src="js/app/app.js"></script>
<script type="text/javascript" src="js/app/models.js"></script>
<script type="text/javascript" src="js/app/collections.js"></script>
<script type="text/javascript" src="js/app/views.js"></script>
<script type="text/javascript" src="js/app/routes.js"></script>
<script>
    let MainRouter = new App.Router.Main();
    Backbone.history.start({pushState: false});
    let htmlmixed = {
        name       : "htmlmixed",
        scriptTypes: [{
            matches: /\/x-handlebars-template|\/x-mustache/i,
            mode   : null
        },
                      {
                          matches: /(text|application)\/(x-)?vb(a|script)/i,
                          mode   : "vbscript"
                      }]
    };
    let editor    = CodeMirror.fromTextArea(document.getElementById("editor"), {
        mode           : 'css',
        lineNumbers    : true,
        styleActiveLine: true,
        matchBrackets  : true,
        theme          : 'material',
        lineWrapping   : true,
        autofocus      : true,
        autoCloseBrackets: true,
        matchTags: {bothTags: true},
        extraKeys: {'Ctrl-Space': 'autocomplete'}
    });
</script>
</html>