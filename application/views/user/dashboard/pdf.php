<style>
.pdfobject-container { height: 30rem; border: 1rem solid rgba(0,0,0,.1); }
</style>
<div id="example1"></div>
<script src="<?= base_url('assets/kiaalap/'); ?>/js/pdfobject/pdfobject.min.js"></script>
<script>PDFObject.embed("<?php echo $link; ?>", "#example1");</script>

