<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='{{ asset("./css/auth.css") }}'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&display=swap">
    <title>Регистрация</title>

</head>
<body class="bg-ex-fixed">
<div class="container">
    <div class="content">

        <h1 class="title">Регистрация почти закончена, пожалуйста, заполните необходимые поля</h1>

        <form method="POST" action="{{ route('register.yandex', ['id' => $userId]) }}" class="formContainer">
            @csrf
            @method('POST')

            <input
                class="authInput"
                type="text"
                placeholder="Номер телефона"
                name="phone_number"
                id="phone_number"
                value="{{ old('phone_number') }}"
            />
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js" type="text/javascript"></script>
            <script src="js/jquery.maskedinput.min.js"></script>
            <script>
                $("#phone_number").mask("+7(999)999-99-99");
            </script>

            <input
                class="authInput"
                type="text"
                placeholder="Город"
                name="city"
                value="{{old('city')}}"
            />

            <input
                class="authInput"
                type="text"
                placeholder="Место обучения/работы"
                name="study_place"
                value="{{old('study_place')}}"
            />

            <select class="authInput eduSelect" name="edu_id" id="eduSelect">
                <option value="" disabled selected hidden>Уровень образования</option>
                @foreach($educationLevels as $educationLevel)
                    <option value="{{ $educationLevel->id }}">{{ $educationLevel->title }}</option>
                @endforeach
            </select>

            <input
                class="authInput"
                type="text"
                placeholder="Дата рождения"
                name="birthday"
                value="{{old('birthday')}}"
                onfocus="(this.type='date')"
            />
            @error('surname')
            <p>{{$message}}</p>
            @enderror

            @error('name')
            <p>{{$message}}</p>
            @enderror

            @error('midname')
            <p>{{$message}}</p>
            @enderror

            @error('email')
            <p>{{$message}}</p>
            @enderror

            @error('password')
            <p>{{$message}}</p>
            @enderror

            @error('password_confirmation')
            <p>{{$message}}</p>
            @enderror

            @error('city')
            <p>{{$message}}</p>
            @enderror

            @error('study_place')
            <p>{{$message}}</p>
            @enderror

            @error('edu_id')
            <p>{{$message}}</p>
            @enderror

            @error('birthday')
            <p>{{$message}}</p>
            @enderror

            <button type="submit" class="authButton">Зарегистрироваться</button>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    document.getElementById('eduSelect').addEventListener('change', function() {
        if (this.value === "") {
            this.style.color = '#B1B1B7';
        } else {
            this.style.color = 'black';
        }
    });
</script>
</body>
</html>


</html>

