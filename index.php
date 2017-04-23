<html>
    <head>
        <title>Multyple Upload</title>
        
        <!-- Load File bootstrap.min.css yang ada di folder css -->
      <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->
        
    </head>
    <body>
     
        
        <!-- Isi konten -->
        <div class="row" style="padding: 0 15px;">
            <div class="col-xs-12">
                <!-- Membuat form upload data/gambar -->
                <form method="post" id="multiple_upload_form" enctype="multipart/form-data" action="upload.php">
                    <!-- Untuk mengecek apakah sedang di submit atau tidak -->
					
                   
                   

		   <input type="hidden" name="image_form_submit" value="1"/>
		   
		   
                    <!-- Mengambil gambar -->
                    <label>Ambil Gambar</label>
                    <input type="file" name="images[]" id="images" multiple accept="image/*"/>
					<input type="submit" value="kirim">
                </form>
            </div>
            
            <hr>
            
            <!-- Menampilkan gambar yang di ambil -->
            <div class="col-xs-12" id="images_preview"></div>
        </div>
        
        <!-- Load File jquery.min.js yang ada di folder js -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        
        <!-- Load File jquery.form.js yang ada di folder js -->
        <script type="text/javascript" src="js/jquery.form.js"></script>
        
        <!-- Load File main.js yang ada di folder js -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>