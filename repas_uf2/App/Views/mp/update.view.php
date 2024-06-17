
<form action="/mp/modify" method="post" class="col-11 col-sm-9 col-md-7 col-lg-5 mx-auto border bg-light p-4 mt-4">
    <h2>UPDATE MP</h2>
    <div class="mb-3">
        <label for="num_mp" class="form-label">Num MP</label>
        <input type="number" value="<?php echo $params['mp']['num_mp'] ?? null ?>" class="form-control" name="num_mp" id="num_mp" aria-describedby="helpId" placeholder="Número del MP" />
    </div>
    <div class="mb-3">
        <label for="nom_mp" class="form-label">Nom MP</label>
        <input type="text" value="<?php echo $params['mp']['nom_mp'] ?? null ?>" class="form-control" name="nom_mp" id="nom_mp" aria-describedby="helpId" placeholder="Nom del MP" />
    </div>
    <input type="hidden" name="id" value="<?php echo $params['mp']['id'] ?? null ?>">
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>