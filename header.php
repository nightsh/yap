<!DOCTYPE html>
<html>
<head>
    <title>yap (yet another pastebin)</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

    <?php if(isset($_POST['snip'])): ?>
        <link rel="stylesheet" href="assets/codemirror/lib/codemirror.css" />
        <script type="text/javascript" src="assets/codemirror/lib/codemirror.js"></script>
    <?php endif; ?>

</head>

<body>

<div class="well well-small">
    <h2 class="">paste here:</h2>
</div>
