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
@include('index.header')
@include('components.projectModal')
@include('hellohangang.main')
@include('index.footer')
<!-- inject:js -->
<!-- endinject -->
</body>
</html>
