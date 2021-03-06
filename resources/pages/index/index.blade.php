<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('page.head')
<!-- inject:css -->
<!-- endinject -->
<script type="text/javascript">
    window.projects = <?php echo json_encode($projects, JSON_UNESCAPED_UNICODE); ?>;
    window.skills = <?php echo json_encode($skills, JSON_UNESCAPED_UNICODE); ?>;
    window.isMobile = <?php echo $isMobile ? 'true' : 'false'; ?>;
</script>
</head>
<body>
@include('index.header')
@include('index.intro')
@include('index.project')
@include('index.about')
@include('index.skill')
@include('index.footer')
<!-- inject:js -->
<!-- endinject -->
</body>
</html>
