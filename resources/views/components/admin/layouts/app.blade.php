<!DOCTYPE html>
<html>

@include('admin.layouts.head')

<body class="hold-transition skin-blue sidebar-mini">

<!-- wrapper -->
<div class="wrapper">

    @include('admin.layouts.header')
    @include('admin.layouts.aside')


    <!-- content-wrapper -->
    <div class="content-wrapper">
        <!-- content -->
        <section class="content">
            {{ $slot }}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->


@include('admin.layouts.scripts')

</body>
</html>
