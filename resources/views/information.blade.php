<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/student.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
<p class="title2"> Information</p>

    <table class="styled-table">
    <thead>
        <tr>
            <th>ID_Student</th>
            <th>Name_Student</th>
            <th>City</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
        <tr style=" color:black;font-weight: bold;">
      
           <td>{{$id}}</td>
           <td>{{$name}}</td>
           <td>{{$city}}</td>
           <td>{{$phone}}</td>
           <td>{{$email}}</td>
           <td>{{$gender}}</td>
            
        </tr>
    

        <tr class="active-row" >
            <td style="color : red">by : Zead-Shalaby</td>
            <td style="color : red"></td>
            <td style="color : red">200298</td>
            <td style="color : red"></td>
            <td style="color : red"></td>
            <td style="color : red"></td>
        </tr>   
        <tr>
            <td><a style ="text-decoration: none ;color:black;font-weight: bold;" href ='http://127.0.0.1:8000/'>Back</td>
            </a></td>
            
        </tr>
        <!-- and so on... -->
    </tbody>
</table>
    
</body>
</html>