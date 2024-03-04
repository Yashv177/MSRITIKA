<?php
session_start();
if (isset($_SESSION['username'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>

    <body>
        <form class="container" action="uploadpro.php" method="post"  enctype="multipart/form-data">
            <div class="card">
                <div class="card-header">
                    <h2>Product Upload</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Product Image <span class="errmsg">*</span></label>
                                <input type="file" name="myimg" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Product Name <span class="errmsg">*</span></label>
                                <input class="form-control" name="proname">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Product code <span class="errmsg">*</span></label>
                                <input type="text" name="procode" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Product weight <span class="errmsg">*</span></label>
                                <input type="text" name="proweight" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Product Price <span class="errmsg">*</span></label>
                                <input type="text" name="proprice" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Product Fishing <span class="errmsg">*</span></label>
                                <input type="text" name="profish" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Product type <span class="errmsg">*</span></label>
                                <input type="text" name="protype" class="form-control">
                            </div>
                        </div>    
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Product Note <span class="errmsg">*</span></label>
                                <textarea name="pronote" id=""  class="form-control"></textarea>
                            </div>
                        </div>                   

                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>

                </div>
            </div>
        </form>
    </body>

    </html>



<?php  } else {
    header('location:Login.php?err=2');
} ?>