<!doctype html>
<html>
    <title>name</title>
    <head>
        <script type="text/javascript" src="jquery.js"></script>
        <style>
            .red{color:aqua}
        </style>
    </head>
    <body>
       <script>
        $(document).ready(function()
        {
            $("#name").mouseenter(function()
            {
               $("#name").css({"background-color":"red"});
            });
        });
        </script>
    
        <p>lelo mera mue me</P>
        <label>Name:<input type="text" id="name"></label>
        <label>click<input type="submit" id="but"></label>
    </body>
</html>