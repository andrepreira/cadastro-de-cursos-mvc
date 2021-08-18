<?php include __DIR__ . '/../inicio-html.php'; ?>

    <a href="/listar-cursos" class="btn btn-primary mb-2">Voltar</a>
    <form action="/realiza-login" method="post">
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="senha">E-mail:</label>
            <input type="password" name="senha" id="senha" class="form-control">
        </div>
        <button class="btn btn-primary">
            Entrar
        </button>
    </form>

<?php include __DIR__ . '/../fim-html.php'; ?>