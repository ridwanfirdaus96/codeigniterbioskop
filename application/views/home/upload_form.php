
<head>
<title>Upload Form</title>
</head>

<?php echo $error;?>
<?php echo form_open_multipart('home/do_upload');?>
<form action="#">
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="userfile" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
	</div>
<br><br>
<button class="btn waves-effect waves-light center" type="submit" value="upload" />Upload
    <i class="fa fa-sign-in right"></i>
  </button>
  </form>

