<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        .input-container {
            position: relative;
            width: 300px;
            margin: 0 auto;
            text-align: center;
        }

        .placeholder {
            position: absolute;
            top: 0;
            left: 0;
            width: 25%;
            color: black;
            font-weight: bold;
            padding: 20px;
            background-color: gray;
            border: 2px solid gray;
            border-radius: 10px 0px 0px 10px;
            ;
            z-index: 1;
        }

        .input-field {
            width: 300px;
            padding: 20px;
            border: 2px solid gray;
            border-radius: 10px 25px 20px 10px;
            text-align: center;
            font-size: 15px;
        }

        .submit-button {
            margin-top: 10px;
            padding: 10px 20px;
            border: none;
            margin: 10px auto;
            display: block;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #0056b3;
        }

        .input-field:focus+.placeholder {
            display: none;
        }

                /* Styling for alert messages */
                .alert {
            margin: 20px auto;
            width: fit-content;
            padding: 15px;
            border-radius: 5px;
            color: #fff;
            text-align: center;
            font-weight: bold;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .alert-success {
            background-color: #28a745; /* Green */
        }

        .alert-danger {
            background-color: #dc3545; /* Red */
        }

    </style>

@if ($errors->any())
   <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
   </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <nav>
        <h2 style="text-align: center;">Update Your Bio-Data</h2>
        <hr><br>

    <form action="{{ route('updateUserData', ['id' => $student->id]) }}" method="POST">
      @csrf
      @method('PUT')
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
        </div>

        <div class="input-container">
            <span class="placeholder">D.O.B</span>
            <input style="font-weight: 700;" type="date" name="dob" class="input-field" value="{{ old('dob', $student->dob) }}" required> <br><br>
        </div>

        <div class="input-container">
            <span class="placeholder">CLASS</span>
            <input style="font-weight: 700;" type="text" name="class" class="input-field" value="{{ old('class', $student->class) }}" required> <br><br>
        </div>

        <div class="input-container">
            <span class="placeholder">GENDER</span>
            <input style="font-weight: 700;" type="text" name="gender" class="input-field" value="{{ old('gender', $student->gender) }}" required> <br><br>
        </div>
        <hr>
        <button class="submit-button" type="submit">Submit</button>
    </nav>
</form>


</body>
</html>
