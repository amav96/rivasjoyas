<div class="d-flex justify-content-center m-4">


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
            <div class="form-group">
                <textarea class="form-control" type="text" name="comment" placeholder="Comentario"></textarea>
            </div>
        </div>


        <div class="row">

            <div class="form-group">
                <button type="submit" class="btn btn-success col-12">Enviar</button>
            </div>

        </div>

    </form>
</div>