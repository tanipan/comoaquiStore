<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Ding Done</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <meta name="theme-color" content="#7952b3">



    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Hazte Hubber</h1>
            <div class="row mb-3">
                <div class="col-md-3 themed-grid-col"></div>
                <div class="col-md-6 themed-grid-col">
                    <form method="POST" action="{{ route('huber.create') }}" autocomplete="nope">
                        @csrf
                        <div class=" mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            @error('name')
                                <small class="form-text text-muted"
                                    style="color:red !important;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                            @error('lastname')
                                <small class="form-text text-muted"
                                    style="color:red !important;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Dirección</label>
                            <input type="text" class="form-control" name="address" id="address"
                                value="{{ old('address') }}" autocomplete="nope">

                            <input type="text" class="form-control" name="town" id="town" value="{{ old('town') }}">
                            <input type="text" class="form-control" name="province" id="province"
                                value="{{ old('province') }}">
                            <input type="text" class="form-control" name="cp" id="cp" value="{{ old('cp') }}">
                            <input type="text" class="form-control" name="lat" id="lat" value="{{ old('lat') }}">
                            <input type="text" class="form-control" name="lon" id="lon" value="{{ old('lon') }}">

                            @error('address')
                                <small class="form-text text-muted"
                                    style="color:red !important;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            @error('email')
                                <small class="form-text text-muted"
                                    style="color:red !important;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Tel. móvil</label>
                            <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <small class="form-text text-muted"
                                    style="color:red !important;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="autonomous" class="form-label">¿Eres autónomo?</label>

                            @if ($errors->any())
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="autonomous"
                                        id="flexRadioDefault1" value="0"
                                        {{ old('autonomous') == '0' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No soy autónomo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="autonomous"
                                        id="flexRadioDefault2" value="1"
                                        {{ old('autonomous') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Si soy autónomo
                                    </label>
                                </div>
                            @else
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="autonomous"
                                        id="flexRadioDefault1" value="0" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No soy autónomo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="autonomous"
                                        id="flexRadioDefault2" value="1">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Si soy autónomo
                                    </label>
                                </div>
                            @endif

                        </div>

                        <div class="mb-3">
                            <label for="drivingLicense" class="form-label">¿Tienes carnet de conducir?</label>

                            @if ($errors->any())
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="drivingLicense"
                                        id="flexRadioDefault10" value="0"
                                        {{ old('drivingLicense') == '0' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault10">
                                        No soy autónomo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="drivingLicense"
                                        id="flexRadioDefault20" value="1"
                                        {{ old('drivingLicense') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault20">
                                        Si soy autónomo
                                    </label>
                                </div>
                            @else
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="drivingLicense"
                                        id="flexRadioDefault10" value="0" checked>
                                    <label class="form-check-label" for="flexRadioDefault10">
                                        No soy autónomo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="drivingLicense"
                                        id="flexRadioDefault20" value="1">
                                    <label class="form-check-label" for="flexRadioDefault20">
                                        Si soy autónomo
                                    </label>
                                </div>
                            @endif

                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-3 themed-grid-col"></div>
            </div>

        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Ding Done</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBLGhpvCHkKdN49DjwJf43uUl7C7avvYS0">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <script>
        var searchInput = 'address';

        $(document).ready(autocompletar());

        function autocompletar() {
            var autocomplete;

            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                types: ['geocode'],
                componentRestrictions: {
                    country: "ES"
                }
            });

            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var np = autocomplete.getPlace();

                if (np.address_components[0]["types"][0] == "street_number") {

                    document.getElementById('lat').value = np.geometry.location.lat();
                    document.getElementById('lon').value = np.geometry.location.lng();
                    document.getElementById('town').value = np.address_components[2].long_name;
                    document.getElementById('province').value = np.address_components[3].long_name;
                    document.getElementById('cp').value = np.address_components[6].long_name;

                } else {
                    alert("Indica el número de la calle");
                }
            });
        }
    </script>

</body>

</html>
