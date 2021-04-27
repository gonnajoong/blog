<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('page.head')
<!-- inject:css -->
    <!-- endinject -->
    <script type="text/javascript">
        window.project = <?php echo json_encode($project, JSON_UNESCAPED_UNICODE); ?>;
        window.isMobile = <?php echo $isMobile ? 'true' : 'false'; ?>;
    </script>
</head>
<body>
@include('joy37.header')
@include('joy37.main')
@include('joy37.footer')
<!-- inject:js -->
<!-- endinject -->
</body>
</html>
