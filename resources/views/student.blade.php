<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <style>
        .heading{
            display: flex;
            justify-content: center;
        }
        .heading h1{
            text-transform: uppercase;
            align-items: center;
            margin-top: 50px;
        }

        .data-table{
            padding: 40px;
            margin-top:-20px;
        }
        .student-data{
            display: flex;
            justify-content: center;
        }
        .student-data table{
            border: 5px solid black ;
            border-radius:10px;
        }

        .student-data table td,th{
            border: 2px solid black;
            border-radius: 5px;
           text-align: center;
        }
    </style>
</head>
<body>
<div class="heading">
        <h1>Data For Student</h1>
    </div>

    <div class="data-table">
        <div class="student-data">
            <table>
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Section</th>
                    <th>Department</th>
                    <th>Email</th>
                </thead>
                
                @foreach ($students  as $item)
                  <tr>
                  <td>{{$item['id']}}</td>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['section']}}</td>
                    <td>{{$item['department']}}</td>
                    <td>{{$item['email']}}</td>
                  </tr>
                @endforeach
                
            </table>
        </div>
    </div>
</body>
</html>