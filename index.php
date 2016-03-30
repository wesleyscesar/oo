<?php

require_once ('header.php');

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register(function ($class){
    require_once(str_replace('\\','/',$class . '.php'));
});

$cliente = new wesley\Cliente\Cliente();

if(isset($_POST["asc"])) $str = "asc";

if(isset($_POST["desc"])) $str = "desc";

?>

<button type="submit" value="asc" name="asc" class="btn btn-primary">Ascendente</button>
<button type="submit" value="desc" name="desc" class="btn btn-primary">Descendente</button>

<table class="table table-hover">
    <thead>
    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Pessoa</th>
        <th></th>
    </tr>
    <?php

        $cliente->getCliente($str);
    ?>
    <script>

        $(document).on("click", "#btn", function () {

            var id = $(this).data('id');
            var nome = $(this).data('nome');
            var endereco = $(this).data('endereco');
            var cobranca = $(this).data('cobranca');
            var cidade = $(this).data('cidade');
            var estado = $(this).data('estado');
            var cpf = $(this).data('cpf');
            var telefone = $(this).data('telefone');
            var email = $(this).data('email');
            var pessoa = $(this).data('pessoa');
            var importancia = $(this).data('importancia');

            $(".modal-body #Id").val(id);
            $(".modal-body #nome").val(nome);
            $(".modal-body #endereco").val(endereco);
            $(".modal-body #cobranca").val(cobranca);
            $(".modal-body #cidade").val(cidade);
            $(".modal-body #estado").val(estado);
            $(".modal-body #cpf").val(cpf);
            $(".modal-body #telefone").val(telefone);
            $(".modal-body #email").val(email);
            $(".modal-body #pessoa").val(pessoa);
            $(".modal-body #importancia").val(importancia);
            $("#teste").modal('show');

        });

    </script>

</table>

<?php require_once ('footer.php'); ?>