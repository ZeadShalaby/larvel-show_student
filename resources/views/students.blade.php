<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite( ['resources/css/student.css', 'resources/js/app.js'])
    <title>Document</title>

</head>
<body>
    <p class="title"> Students_Information</p>
    <table class="styled-table">
    <thead>
        <tr>
            <th>ID_Student</th>
            <th>Name_Student</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach ($students as $student)

            <td>  
                <a style ="text-decoration: none ; color:black;font-weight: bold;" href ='/information/{{ $student ["id"] }}' >
             {{ $student ['id'] }} </a>
               </td>
            <td> <a style ="text-decoration: none ;color:black;font-weight: bold;" href ='/information/{{ $student ["id"] }}' >{{ $student ['name'] }}</td>
            </a>
            
        </tr>
        @endforeach

        <tr class="active-row">
            <td style="color : red">by : Zead-Shalaby</td>
            <td style="color : red">200298</td>
        </tr>
        <!-- and so on... -->
    </tbody>
</table>

    
</body>

</html>