<form action="/uf/store" method="post" class="col-11 col-sm-9 col-md-7 col-lg-5 mx-auto border bg-light p-4 mt-4">
    <title><?php $params['title'] ?></title>
    <h2><?php echo $params['mp']['nom_mp'] ?></h2>
    <div class="mb-3">
        <label for="num_uf" class="form-label">Num UF</label>
        <input type="number" class="form-control" name="num_uf" id="num_uf" aria-describedby="helpId" placeholder="Número del UF" />
    </div>
    <div class="mb-3">
        <label for="nom_uf" class="form-label">Nom UF</label>
        <input type="text" class="form-control" name="nom_uf" id="nom_uf" aria-describedby="helpId" placeholder="Nom del UF" />
    </div>
    <div class="mb-3">
        <label for="hores_uf" class="form-label">Hores UF</label>
        <input type="number" class="form-control" name="hores_uf" id="hores_uf" aria-describedby="helpId" placeholder="Hores del UF" />
    </div>
    <input type="hidden" name="mp_id" value="<?php echo $params['mp']['id'] ?>">
    <div class="mb-3">
        <button type="submit" name="" class="btn btn-primary">Submit</button>
    </div>
</form>


<div class="llista">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Id UF</th>
                <th scope="col">Num UF</th>
                <th scope="col">Nom UF</th>
                <th scope="col">Hores UF</th>
                <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($params['ufs'] as $uf) : ?>
                <tr>
                    <td><?php echo $uf['id'] ?></td>
                    <td><?php echo $uf['num_uf'] ?></td>
                    <td><?php echo $uf['nom_uf'] ?></td>
                    <td><?php echo $uf['hores_uf'] ?></td>
                    <td> <a  class="btn btn-danger" href="/uf/destroy/?id=<?php echo $uf['id']?>" role="button">Remove</a></td>
                    <td> <a  class="btn btn-primary" href="/uf/update/?id=<?php echo $uf['id']?>" role="button">Update</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>