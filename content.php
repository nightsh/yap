<div class="container-fluid">
    <div class="row-fluid">
        <div class="span2"></div>
        <div class="span8">
            <?php
                if(isset($note->message)) echo $note->message;
            ?>
            <form id="pasteform" action="" class="" method="post">
                <textarea name="note" id="note" rows="20" class="span12"><?php echo $note->content; ?></textarea>
            <br />
                <input type="hidden" name="snip" />
                <input id="submit" type="submit" class="btn btn-primary pull-right" />
            </form>
        </div>
        <div class="span2"></div>
    </div>
</div>
<script type="text/javascript">
    $('button.close').click(function(){
        //$(this).parent().fadeOut('300');
        $(this).parent().attr('style','opacity:0;');
    });
</script>
</body>
</html>