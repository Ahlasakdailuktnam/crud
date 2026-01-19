<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="container w-50 mt-3 p-5 shadow rounded-3">
        <form action="">
            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" id="image" width="200px" height="200px" alt="" class=" rounded-circle">
            <input id="file" type="file" class="form-control ">
        </form>
    </div>
</body>
<script>
    $(document).ready(function(){
        $('#file').hide();
        $('#image').click(function(){
            $('#file').click();
        })
        $('#file').change(function(){
            const file= this.files[0];
            if(file){
                const image=URL.createObjectURL(file);
                $('#image').attr('src',image);
            }
        })
    })
</script>
</html>