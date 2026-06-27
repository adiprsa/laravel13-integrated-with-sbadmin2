<!DOCTYPE html>
<html lang="en">
<x-header/>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <x-sidebar/>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <x-topbar/>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    {{ $slot }}
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <x-footer/>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</body
</html>