<div class="container mt-3">
    <h2>Formulário - contato</h2>
    <form method="post" action="<?= $action ?>">
        <div class="form-group">
            <label for="exampleFormControlInput1" >Nome</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nome" value="<?php if(isset($nome)) echo $nome ?>" placeholder="Douglas Marcelino">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput2" name="email" value="<?php if(isset($email)) echo $email ?>" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensagem</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" rows="3"><?php if(isset($mensagem)) echo $mensagem ?></textarea>
        </div>
        <input type="text" class="phone">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>