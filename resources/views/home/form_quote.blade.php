<div class="d-flex justify-content-center m-4 content-form">


    <form id="form_quote" action="{{ url('/quote') }}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Nombre">
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
        </div>


        <div class="row">
            <div class="form-group">
                <input class="form-control" type="text" name="phone_number" placeholder="Telefono">
            </div>
        </div>


        <div class="row">
            <textarea class="form-control" type="text" name="comment"
                placeholder="Cuentanos sobre tus pertenencias"></textarea>
        </div>


        <div class="row btn-submit">
            <button type="submit" class="btn-send btn btn-success col-12">Enviar</button>
        </div>

    </form>
</div>