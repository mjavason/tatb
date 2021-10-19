<?php
//require_once "config/connect.php";
require_once "functions/functions.php";

if (!isset($_SESSION['log'])) {
    //header('location:login.php');
    //exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once('includes/head.php');
    ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        require_once('includes/sidebar.php');
        ?>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                require_once('includes/topbar.php');
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">New Post</h1>
                    </div>


                    <main>

                        <div class="centered p-4">
<?php processNewPost($_POST); ?>
                            <form action="functions/test.php" method="post" enctype="multipart/form-data">

                                <div class="mb-5">
                                    <label for="title">Blog Title</label>
                                    <input type="text" name="title" id="title" class="container">
                                </div>


                                <div class="">
                                    <label for="bp">Blog Post</label>
                                    <!-- <div id="editor" class="edit"></div>
        <input type="text" name="rbp" id="editor" class="invisible"> -->
                                    <textarea name="bp" id="editor"></textarea>

                                <div class="mb-5 mt-5">
                                    <label for="bi">Blog Image</label>
                                    <input type="file" name="bi" id="image" class="container">
                                </div>

                                <div class="mb-5">
                                    <label for="tag">Blog Post Tags</label>
                                    <input type="text" name="tag" id="tag" class="container">
                                </div>


                                <!-- <a href="" onclick="validateNewExamForm()" class="btn btn-danger btn-user btn-block invisible">Process</a> -->
                                <button type="submit" class="btn btn-primary btn-user btn-block" id="submit" name="submit">Submit</button>
                                <!-- <input type="submit" name="Submit" class="btn btn-primary btn-user btn-block"> -->
                            </form>

                        </div>

                    </main>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            require_once('includes/footer.php');
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php
    require_once('includes/logout_modal.php');
    ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- ck editor includes -->
    <script src="vendor/ckeditor5_bdc/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                //toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>

</body>

</html>