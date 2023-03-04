
<!DOCTYPE html>
<html>
    <head>
        <title>Multiple Upload File Codeigniter</title>
    </head>
    <body>
        <h3>Multiple Upload File Codeigniter</h3>
        <?php echo form_open_multipart('upload/multiple_upload'); ?>
        <table border="1">
            <tr><td>File 1</td><td><?php echo form_upload('file1'); ?></td></tr>
            <tr><td>File 2</td><td><?php echo form_upload('file2'); ?></td></tr>
			<tr><td>File 3</td><td><?php echo form_upload('file2'); ?></td></tr>
			<tr><td>File 4</td><td><?php echo form_upload('file2'); ?></td></tr>
            <tr><td></td><td><?php echo form_submit('upload', 'upload file'); ?></td></tr>
        </table>
        <?php echo form_close() ?>
    </body>
</html>