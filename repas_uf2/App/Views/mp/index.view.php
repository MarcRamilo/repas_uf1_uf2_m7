<form action="/mp/store" method="post" class="col-11 col-sm-9 col-md-7 col-lg-5 mx-auto border bg-light p-4 mt-4">
    <h2>NEW MP</h2>
    <div class="mb-3">
        <label for="num_mp" class="form-label">Num MP</label>
        <input type="number" class="form-control" name="num_mp" id="num_mp" aria-describedby="helpId" placeholder="Número del MP" />
    </div>
    <div class="mb-3">
        <label for="nom_mp" class="form-label">Nom MP</label>
        <input type="text" class="form-control" name="nom_mp" id="nom_mp" aria-describedby="helpId" placeholder="Nom del MP" />
    </div>
    <div class="mb-3">
        <button type="submit" name="" class="btn btn-primary">Submit</button>
    </div>
</form>

<div class="llista">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Id MP</th>
                <th scope="col">Num MP</th>
                <th scope="col">Nom MP</th>
                <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($params['llista'] as $mp) : ?>
                <tr>
                    <td><?php echo $mp['id'] ?></td>
                    <td><?php echo $mp['num_mp'] ?></td>
                    <td><?php echo $mp['nom_mp'] ?></td>
                    <td> <a  class="btn btn-danger" href="/mp/destroy/?id=<?php echo $mp['id']?>" role="button">Remove</a></td>
                    <td> <a  class="btn btn-primary" href="/mp/update/?id=<?php echo $mp['id']?>" role="button">Update</a></td>
                    <td> <a  class="btn btn-success" href="/uf/create/?id=<?php echo $mp['id']?>" role="button">+UF</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>