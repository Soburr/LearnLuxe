<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student - Profile</title>
</head>
<body>

    <style>
        nav {
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 500px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .back {
            margin-top: 10px;
            padding: 10px 10px;
            border: none;
            margin: 10px auto;
            display: block;
            border-radius: 5px;
            background-color: green;
            color: #fff;
            cursor: pointer;
            width: 15%;
            text-decoration: none;
            text-align: center;
        }
        
        .back:hover {
            background-color: #006600;
        }

    </style>

    <nav>
        <h2 style="text-align: center;"> Your Bio-Data</h2>
        <hr><br>

        <div class="default">
            <p
                style="border: 2px solid gray;
                  padding: 20px;
                  margin: 0px auto;
                  width: 300px;
                  background-color: gray;
                  font-weight: bold;
                  border-radius: 10px 25px 20px 10px;">
                {{ $student->name }}</p> <br>
            <p
                style="border: 2px solid gray;
                  padding: 20px;
                  margin: 0 auto;
                  width: 300px;
                  background-color: gray;
                  font-weight: bold;
                  border-radius: 10px 25px 20px 10px;">
                {{ $student->student_id }}</p> <br>
            <p
                style="border: 2px solid gray;
                  padding: 20px;
                  margin: 0 auto;
                  width: 300px;
                  background-color: gray;
                  font-weight: bold;
                  border-radius: 10px 25px 20px 10px;">
                {{ $student->email }}</p> <br>

            <p
                style="border: 2px solid gray;
                  padding: 20px;
                  margin: 0 auto;
                  width: 300px;
                  background-color: gray;
                  font-weight: bold;
                  border-radius: 10px 25px 20px 10px;">
                {{ $student->dob }}</p> <br>

            <p
                style="border: 2px solid gray;
                  padding: 20px;
                  margin: 0 auto;
                  width: 300px;
                  background-color: gray;
                  font-weight: bold;
                  border-radius: 10px 25px 20px 10px;">
                {{ $student->class }}</p> <br>

            <p
                style="border: 2px solid gray;
                  padding: 20px;
                  margin: 0 auto;
                  width: 300px;
                  background-color: gray;
                  font-weight: bold;
                  border-radius: 10px 25px 20px 10px;">
                {{ $student->gender }}</p> <br>
        </div>
        <hr>
        <a href="{{ url('student/dashboard/bio-data') }}" class="back">Go Back</a>
    </nav>


</body>
</html>
