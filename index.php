<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th><th>Title</th><th>Author</th>
            </tr>
        </thead>
        <tbody id="tblPosts">

        </tbody>
    </table>
    
</body>
<script>
    function lodePosts(){
        var url = "https://jsonplaceholder.typicode.com/posts";
        $.getJSON(url)
                .done((data)=>{
                    $.each(data, (k, item)=>{
                        console.log(item);
                        var line = "<tr>";
                            line += "<td>" + item.id + "</td>";
                            line += "<td>" + item.title + "</td>";
                            line += "<td>" + item.userId + "</td>";
                            line += "</tr>";
                        $("#tbnPosts").append(line);
                    });
                })
                .fail((xhr, status, err)=>{

                });
    }
</script>
</html>
